<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SiteSetting extends BaseModel implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded=['id'];

    public static $keys = [

        "app_name" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "App Title"
        ],

        "app_slogan" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "App Slogan"
        ],


        "secondary_phone_number" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Secondary Phone Number"
        ],


        "address" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Address"
        ],


        "primary_email" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Primary Email"
        ],


        "secondary_email" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Secondary Email"
        ],

        "map_location" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Map Location"
        ],

        "registration_number" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Registration Number"
        ],

        "facebook_url" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Facebook URL"
        ],

        "twitter_url" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Twitter URL"
        ],

        "linkedin_url" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "LinkedIn URL"
        ],

        "youtube_url" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Youtube URL"
        ],

        "instagram_url" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "Instagram URL"
        ],

        "logo" => [
            "type" => "image",
            "element" => "image",
            "visible" => 1,
            "display_text" => "Site Logo"
        ],


    ];
}
