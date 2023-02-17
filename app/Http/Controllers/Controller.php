<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Department;
use App\Models\ImportantWebsite;
use App\Models\News;
use App\Models\Post;
use App\Models\School;
use App\Models\SchoolDescription;
use App\Models\SchoolInNumbers;
use App\Models\Services;
use App\Models\Speciality;
use App\Models\Topic;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function api(Request $request) {
        try {
            $lang = $request->input('lang');
            $services = Services::select(
                'id',
                $lang . '_title as title',
                'image',
                'url_link',
                'is_active'
            )->get();
            $posts = Post::select(
                'id',
                $lang . '_title as title',
                $lang . '_description as description',
                'image as img',
                'multi_image as images',
                'is_active'
            )->latest()->take(5)->get();
            $ads = Ad::select(
                'id',
                $lang . '_title as title',
                $lang . '_description as description',
                'image as src',
                'multi_image as images',
                'url_link as link',
                'is_active'
            )->latest()->take(3)->get();
            $school_in_numbers = SchoolInNumbers::select(
                'id',
                $lang . '_title as title',
                'icon',
                'number as total',
                'is_active'
            )->get();
            $specialities = Speciality::select(
                'id',
                $lang . '_title as title',
                $lang . '_description as description',
                'image as src',
                'is_active'
            )->get();
            $departments = Department::select(
                'id',
                $lang . '_title as name',
                $lang . '_description as description',
                $lang . '_responsible_name as full_name',
                'responsible_email as email',
                'responsible_image as rs_image',
                'image as src',
                'is_active'
            )->get();
            $news = News::select(
                'id',
                $lang . '_title as title',
                $lang . '_description as description',
                'multi_image as images',
                'is_active'
            )->latest()->take(10)->get();
            $topics = Topic::select(
                'id',
                $lang . '_title as title',
                $lang . '_description as description',
                'image as img',
                'multi_image as images',
                'is_active'
            )->latest()->take(10)->get();

            return response()->json([
                "status" => true,
                "posts" => $posts,
                "ads" => $ads,
                "services" => $services,
                "school_in_numbers" => $school_in_numbers,
                "specialities" => $specialities,
                "departments" => $departments,
                "news" => $news,
                "topics" => $topics
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
                "posts" => [],
                "ads" => [],
                "school_in_numbers" => [],
                "specialities" => [],
                "departments" => [],
                "news" => [],
                "topics" => [],
                "services" => []
            ]);
        }
    }

    public function get_content_by_id(Request $request) {
        $lang = $request->input('lang');
        $id = $request->input('id');
        $table = $request->input('table');

        switch($table) {
            case "posts":
                $data = Post::query()->select(
                    'id',
                    $lang . '_title as title',
                    $lang . '_description as description',
                    'image as image',
                    'multi_image as images',
                    'is_active'
                )->where('id', $id)->get();
                return $data;
            case "ads":
                $data = Ad::query()->select(
                    'id',
                    $lang . '_title as title',
                    $lang . '_description as description',
                    'image as image',
                    'multi_image as images',
                    'url_link as link',
                    'is_active'
                )->where('id', $id)->get();
                return $data;
            case "news":
                $data = News::query()->select(
                    'id',
                    $lang . '_title as title',
                    $lang . '_description as description',
                    'multi_image as images',
                    'is_active'
                )->where('id', $id)->get();
                return $data;
            case "topics":
                $data = Topic::query()->select(
                    'id',
                    $lang . '_title as title',
                    $lang . '_description as description',
                    'image as image',
                    'multi_image as images',
                    'is_active'
                )->where('id', $id)->get();
                return $data;
            default:
                return null;
        }
    }

    public function info(Request $request) {
        try {
            $lang = $request->input('lang');
            $school = School::select(
                'id',
                'email',
                'phone',
                'fax',
                'facebook',
                'instagram',
                'youtube',
                'logo',
                $lang . '_name as name',
                $lang . '_description as description',
                $lang . '_working_days as working_days',
                'working_hours',
                'latitude',
                'longitude',
                $lang . '_address as address',
                'under_maintenance'
            )->first();
            $websites = ImportantWebsite::select(
                $lang . '_title as title',
                'url_link'
            )->get();
            return response()->json([
                "status" => true,
                "school" => $school,
                "websites" => $websites
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "school" => null,
                "websites" => []
            ]);
        }
    }

    public function school_description(Request $request) {
        try {
            $lang = $request->input('lang');
            $school_description = SchoolDescription::select(
                'id',
                $lang . '_title as title',
                $lang . '_description as description',
                'image',
                'multi_image as images',
                'updated_at'
            )->first();
            return response()->json([
                "status" => true,
                "school_description" => $school_description
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "school_description" => null
            ]);
        }
    }
}
