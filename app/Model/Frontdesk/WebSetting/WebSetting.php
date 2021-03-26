<?php

namespace App\Model\WebSetting\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $home_banner_section_title_1
 * @property string $home_banner_section_title_2
 * @property string $home_banner_section_title_3
 * @property string $home_about_section_title
 * @property string $home_about_section_short_details
 * @property string $home_about_section_long_details
 * @property string $home_room_section_title
 * @property string $home_room_section_title_sub
 * @property string $home_team_section_title_1
 * @property string $home_team_section_title_2
 * @property string $home_service_section_title
 * @property string $home_service_section_sub_title
 * @property string $home_video_section_title
 * @property string $home_video_section_sub_title
 * @property string $home_video_section_video_link
 * @property string $gallery_gallery_section_title_1
 * @property string $gallery_gallery_section_title_2
 * @property string $home_testimonial_section_title_1
 * @property string $home_testimonial_section_title_2
 * @property string $home_facility_section_title_1
 * @property string $home_facility_section_title_2
 * @property string $general_general_section_footer_content
 * @property string $general_general_section_fb_comment_script
 * @property string $blog_blog_section_title_1
 * @property string $blog_blog_section_title_2
 * @property string $faq_faq_section_title_1
 * @property string $faq_faq_section_title_2
 * @property string $contact_all_section_title_1
 * @property string $contact_all_section_title_2
 * @property string $contact_all_section_phone
 * @property string $contact_all_section_email_web
 * @property string $contact_all_section_address
 * @property string $contact_all_section_map
 * @property string $created_at
 * @property string $updated_at
 */
class WebSetting extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['home_banner_section_title_1', 'home_banner_section_title_2', 'home_banner_section_title_3', 'home_about_section_title', 'home_about_section_short_details', 'home_about_section_long_details', 'home_room_section_title', 'home_room_section_title_sub', 'home_team_section_title_1', 'home_team_section_title_2', 'home_service_section_title', 'home_service_section_sub_title', 'home_video_section_title', 'home_video_section_sub_title', 'home_video_section_video_link', 'gallery_gallery_section_title_1', 'gallery_gallery_section_title_2', 'home_testimonial_section_title_1', 'home_testimonial_section_title_2', 'home_facility_section_title_1', 'home_facility_section_title_2', 'general_general_section_footer_content', 'general_general_section_fb_comment_script', 'blog_blog_section_title_1', 'blog_blog_section_title_2', 'faq_faq_section_title_1', 'faq_faq_section_title_2', 'contact_all_section_title_1', 'contact_all_section_title_2', 'contact_all_section_phone', 'contact_all_section_email_web', 'contact_all_section_address', 'contact_all_section_map', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
