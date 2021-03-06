<?php

/**
 * Class Clearfy_Sanitize
 */
class Clearfy_Sanitize {

    /**
     * Clearfy_Sanitize constructor.
     */
    public function __construct() {
        add_filter( 'sanitize_title', array( $this, 'sanitize_title' ), 9 );
        add_filter( 'sanitize_file_name', array( $this, 'sanitize_file_name' ) );
    }


    /**
     * General sanitize
     *
     * @param $title
     *
     * @return mixed|string
     */
    public function sanitize( $title ) {

        $title = html_entity_decode( $title, ENT_QUOTES, 'utf-8' );
        $title = strtr( $title, $this->get_utf() );
        $title = trim( $title, '-' );
        $title = strtolower( $title );
        $title = preg_replace( "/[^A-Za-z0-9-_.]/", '-', $title );
        $title = preg_replace( '~([=+.-])\\1+~' , '\\1', $title );

        return $title;

    }


    /**
     * Sanitize title
     *
     * @param $title
     *
     * @return mixed|string
     */
    public function sanitize_title( $title ) {
        $title = $this->sanitize( $title );
        $title = str_replace('.', '-', $title);
        $title = preg_replace('/-{2,}/', '-', $title);

        return $title;
    }


    /**
     * Sanitize filename
     *
     * @param $title
     *
     * @return mixed|string
     */
    public function sanitize_file_name( $title ) {
        return $this->sanitize( $title );
    }



    public function sanitize_existing_slugs() {

        global $wpdb;

        $posts = $wpdb->get_results("SELECT ID, post_name FROM {$wpdb->posts} WHERE post_name REGEXP('[^A-Za-z0-9\-]+') AND post_status IN ('publish', 'future', 'private')");
        foreach ( (array) $posts as $post ) {
            $sanitized_name = $this->sanitize_title(urldecode($post->post_name));
            if ( $post->post_name != $sanitized_name && ! empty( $sanitized_name ) ) {
                add_post_meta($post->ID, '_wp_old_slug', $post->post_name);
                $wpdb->update($wpdb->posts, array( 'post_name' => $sanitized_name ), array( 'ID' => $post->ID ));
            }
        }

        $terms = $wpdb->get_results("SELECT term_id, slug FROM {$wpdb->terms} WHERE slug REGEXP('[^A-Za-z0-9\-]+') ");
        foreach ( (array) $terms as $term ) {
            $sanitized_slug = $this->sanitize_title(urldecode($term->slug));
            if ( $term->slug != $sanitized_slug && ! empty( $sanitized_slug ) ) {
                $wpdb->update($wpdb->terms, array( 'slug' => $sanitized_slug ), array( 'term_id' => $term->term_id ));
            }
        }

    }



    /**
     * Set utf
     */
    protected function get_utf() {

        return array(
            '??' => 'Ae',
            '??' => 'ae',
            '??' => 'Ae',
            '??' => 'ae',
            '??' => 'A',
            '??' => 'a',
            '??' => 'A',
            '??' => 'a',
            '??' => 'A',
            '??' => 'a',
            '??' => 'A',
            '??' => 'a',
            '??' => 'A',
            '??' => 'a',
            '??' => 'a',
            '???' => 'a',
            '??' => 'a',
            '??' => 'C',
            '??' => 'c',
            '??' => 'C',
            '??' => 'c',
            '??' => 'D',
            '??' => 'd',
            '??' => 'E',
            '??' => 'e',
            '??' => 'E',
            '??' => 'e',
            '??' => 'E',
            '??' => 'e',
            '??' => 'E',
            '??' => 'e',
            '???' => 'e',
            '??' => 'f',
            '??' => 'g',
            '??' => 'G',
            '??' => 'I',
            '??' => 'i',
            '??' => 'I',
            '??' => 'i',
            '??' => 'I',
            '??' => 'i',
            '??' => 'Ii',
            '??' => 'ii',
            '??' => 'i',
            '??' => 'i',
            'I' => 'I',
            '??' => 'N',
            '??' => 'n',
            '???' => 'n',
            '??' => 'O',
            '??' => 'o',
            '??' => 'O',
            '??' => 'o',
            '??' => 'O',
            '??' => 'o',
            '??' => 'O',
            '??' => 'o',
            '??' => 'O',
            '??' => 'o',
            '???' => 'o',
            '??' => 'Oe',
            '??' => 'oe',
            '??' => 'Oe',
            '??' => 'oe',
            '??' => 'ss',
            '??' => 'S',
            '??' => 's',
            '??' => 's',
            '??' => 'S',
            '??' => 'U',
            '??' => 'u',
            '??' => 'U',
            '??' => 'u',
            '??' => 'U',
            '??' => 'u',
            '??' => 'Ue',
            '??' => 'ue',
            '??' => 'Y',
            '??' => 'y',
            '??' => 'y',
            '??' => 'Z',
            '??' => 'z',
            '???' => '0',
            '??' => '1',
            '??' => '2',
            '??' => '3',
            '???' => '4',
            '???' => '5',
            '???' => '6',
            '???' => '7',
            '???' => '8',
            '???' => '9' ,
            '???' => '0',
            '???' => '1',
            '???' => '2',
            '???' => '3',
            '???' => '4',
            '???' => '5',
            '???' => '6',
            '???' => '7',
            '???' => '8',
            '???' => '9',
            '??' => '-',
            '??' => 'x',
            '???' => '-',
            '???' => '=',
            '???' => '=',
            '???' => '-',
            '???' => '-',
            '???' => '-',
            '???' => '-',
            '???' => '-',
            '???' => '.',
            '???' => '..',
            '???' => '...',
            '???' => '.',
            '??' => '-',
            ' ' => '-',
            '??' => 'A',
            '??' => 'B',
            '??' => 'V',
            '??' => 'G',
            '??' => 'D',
            '??' => 'E',
            '??' => 'YO',
            '??' => 'ZH',
            '??' => 'Z',
            '??' => 'I',
            '??' => 'Y',
            '??' => 'K',
            '??' => 'L',
            '??' => 'M',
            '??' => 'N',
            '??' => 'O',
            '??' => 'P',
            '??' => 'R',
            '??' => 'S',
            '??' => 'T',
            '??' => 'U',
            '??' => 'F',
            '??' => 'H',
            '??' => 'TS',
            '??' => 'CH',
            '??' => 'SH',
            '??' => 'SCH',
            '??' => '',
            '??' => 'Y',
            '??' => '',
            '??' => 'E',
            '??' => 'YU',
            '??' => 'YA',
            '??' => 'a',
            '??' => 'b',
            '??' => 'v',
            '??' => 'g',
            '??' => 'd',
            '??' => 'e',
            '??' => 'yo',
            '??' => 'zh',
            '??' => 'z',
            '??' => 'i',
            '??' => 'y',
            '??' => 'k',
            '??' => 'l',
            '??' => 'm',
            '??' => 'n',
            '??' => 'o',
            '??' => 'p',
            '??' => 'r',
            '??' => 's',
            '??' => 't',
            '??' => 'u',
            '??' => 'f',
            '??' => 'h',
            '??' => 'ts',
            '??' => 'ch',
            '??' => 'sh',
            '??' => 'sch',
            '??' => '',
            '??' => 'y',
            '??' => '',
            '??' => 'e',
            '??' => 'yu',
            '??' => 'ya'
        );

    }

}