<?php

namespace App\Http\Requests\SiteSetting;

use App\Models\SiteSetting;
use Illuminate\Foundation\Http\FormRequest;

class CreateSiteSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return
            $data = [
                "settingable_type" => ["nullable"],
                "settingable_id" => ["nullable"]
            ];
            foreach (SiteSetting::$keys as $key => $type) {
                $data[$key] = ["nullable", $type == "image" ? "image" : ""];
            }
            return $data;

    }
}
