<?php

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Admin\Address;
use App\Models\Admin\Company;
use App\Models\Admin\Contact;
use App\Models\Admin\Industry;
use App\Models\Admin\ProductSas;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

/**
 * The function `customUpload` uploads a file to a specified path and resizes it if it is an image.
 * 
 * @param UploadedFile mainFile The main file that is being uploaded. It is an instance of the
 * UploadedFile class.
 * @param string uploadPath The path where the uploaded file will be stored.
 * @param reqWidth The required width of the uploaded image. If this parameter is not provided or is
 * set to null, the image will not be resized.
 * @param reqHeight The "reqHeight" parameter is an optional integer value that specifies the required
 * height of the uploaded image. If this parameter is provided, the uploaded image will be resized to
 * the specified height while maintaining its aspect ratio. If this parameter is not provided, the
 * uploaded file will not be resized.
 * 
 * @return array an array containing information about the uploaded file, such as the file name, file
 * extension, and file size. The array is also being sanitized using the `array_map` function with the
 * `htmlspecialchars` function as the callback.
 */

if (!function_exists('customUpload')) {
    function customUpload(UploadedFile $mainFile, string $uploadPath, ?int $reqWidth = null, ?int $reqHeight = null): array
    {
        try {
            $originalName = pathinfo($mainFile->getClientOriginalName(), PATHINFO_FILENAME);

            $hashedName = substr($mainFile->hashName(), -12);

            $fileName = $originalName . '_' . $hashedName;

            // if (!is_dir($uploadPath)) {
            //     if (!mkdir($uploadPath, 0777, true)) {
            //         abort(404, "Failed to create the directory: $uploadPath");
            //     }
            // }
            if (!File::isDirectory($uploadPath) && !File::makeDirectory($uploadPath, 0777, true, true)) {
                throw new \RuntimeException("Failed to create the directory: $uploadPath");
            }

            // if (strpos($mainFile->getMimeType(), 'image') === 0) {
            //     $requestImgPath = "{$uploadPath}/requestImg";
            //     if (!is_dir($requestImgPath)) {
            //         if (!mkdir($requestImgPath, 0777, true)) {
            //             abort(404, "Failed to create the directory: $requestImgPath");
            //         }
            //     }

            if (strpos($mainFile->getMimeType(), 'image') === 0) {
                $requestImgPath = "{$uploadPath}/requestImg";
                if (!File::isDirectory($requestImgPath) && !File::makeDirectory($requestImgPath, 0777, true, true)) {
                    throw new \RuntimeException("Failed to create the directory: $requestImgPath");
                }

                $img = Image::make($mainFile);
                $img->save("$uploadPath/$fileName");
                if ($reqWidth !== null && $reqHeight !== null) {
                    $img->resize($reqWidth, $reqHeight, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $img->save("$requestImgPath/$fileName");
                }
            } else {
                $mainFile->storeAs($uploadPath, $fileName);
            }

            $output = [
                'status'         => 1,
                'file_name'      => $fileName,
                'file_extension' => $mainFile->getClientOriginalExtension(),
                'file_size'      => $mainFile->getSize(),
                'file_type'      => $mainFile->getMimeType(),
            ];

            return array_map('htmlspecialchars', $output);
        } catch (\Exception $e) {
            return [
                'status' => 0,
                'error_message' => $e->getMessage(),
            ];
        }
    }
}

if (!function_exists('generateRefUniqueCode')) {
    /**
     * Generate a Ref Unique Code.
     *
     * @return string
     */
    function generateRefUniqueCode()
    {
        $prefix          = 'TFP-';
        $date            = date('dmY');
        $lastCode        = ProductSas::latest()->value('ref_code');
        $lastNumber      = intval(substr($lastCode, -3));
        $newNumber       = $lastNumber + 1;
        $newNumberPadded = str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        $code            = $prefix . $date . $newNumberPadded;
        return $code;
    }
}
if (!function_exists('getAllCountry')) {
    /**
     * Generate a unique transaction number.
     *
     * @return string
     */
    function getAllCountry()
    {
        return Country::get(['id', 'name']);
    }
}

if (!function_exists('formatText')) {
    
    /**
     * Generate a unique transaction number.
     *
     * @return string
     */
    function formatText($text)
    { {
            $text = str_replace('_', ' ', $text);
            return ucfirst(strtolower($text));
        }
    }
}

if (!function_exists('getAllState')) {
    /**
     * Generate a unique transaction number.
     *
     * @return string
     */
    function getAllState()
    {
        return State::get(['id', 'name']);
    }
}

if (!function_exists('getAllCity')) {
    /**
     * Generate a unique transaction number.
     *
     * @return string
     */
    function getAllCity()
    {
        return City::get(['id', 'name']);
    }
}
if (!function_exists('getIndustry')) {
    /**
     * Generate a unique transaction number.
     *
     * @return string
     */
    function getIndustry()
    {
        return Industry::get(['id', 'name']);
    }
}

if (!function_exists('getAddress')) {
    /**
     * Generate a unique transaction number.
     *
     * @return string
     */
    function getAddress()
    {
        return Address::get(['id', 'address']);
    }
}

// if (!function_exists('getSiteData')) {
//     /**
//      * Generate a unique transaction number.
//      *
//      * @return string
//      */
//     function getSiteData()
//     {
//         return Site::first();
//     }
// }

if (!function_exists('generate_unique_code')) {
    /**
     * Generates a unique code for messages.
     *
     * @param string $prefix The prefix for the code.
     * @return string The generated code.
     */
    function generate_unique_code($prefix = 'MSG')
    {
        $date = now()->format('dmy');
        $pattern = "$prefix-$date-%";

        $latestCode = Contact::where('code', 'LIKE', $pattern)
            ->orderByDesc('id')
            ->value('code');

        $serialNumber = $latestCode ? (int) explode('-', $latestCode)[2] + 1 : 1;

        return sprintf('%s-%s-%d', $prefix, $date, $serialNumber);
    }
}
