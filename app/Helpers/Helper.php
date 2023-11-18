<?php

namespace app\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function getCategories($categories, $parent_id = 0, $charLevel = '')
    {
        $result = '';
        foreach ($categories as $key => $category) {
            if ($category->ParentId == $parent_id) {
                $result .= '
                <tr >
                    <td>' . $category->CategoryID . '</td>
                    <td>' . $charLevel . $category->Name . '</td>
                    <td>' . $category->Description . '</td>
                    <td>' . $category->Slug . '</td>
                    <td>' . self::Active($category->Active) . ' </td>
                    <td class="image-cell">
                        <div class="image">
                        <img src="'.($category->Image ? $category->Image : 'https://avatars.dicebear.com/v2/initials/felicita-yundt.svg').'" class="rounded-full">
                        </div>
                    </td>
                    <td class="image-cell">
                        <div class=" w-[100px] h-[50px]">
                        <img src="'.($category->CategoryProductAvatar ? $category->CategoryProductAvatar : 'https://avatars.dicebear.com/v2/initials/felicita-yundt.svg').'" class="object-contain h-[100%] w-[100%]">
                        </div>
                    </td>
                    <td>' . $category->ParentId . '</td>
                    <td>
                    
                            <a href="/admin/category/edit-' . $category->CategoryID . '" >
                                <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                    <span class="icon"><i class="fas fa-edit"></i></span>
                                </button>
                            </a>
                            <a href="#" onclick="removeRow(' . $category->CategoryID . ', \'/admin/category/destroy\')">
                                <button class="button small red --jb-modal" data-target="sample-modal-2" type="button">
                                    <span class="icon"><i class="fas fa-trash"></i></span>
                                </button>    
                            </a>
                    </td>
                </tr>
                ';
                unset($categories[$key]);

                $result .= self::getCategories($categories, $category->CategoryID, $charLevel . '|--');
            }
        }
        return $result;
    }
    public static function Active($active = 0): string
    {
        return $active  == 0 ? '<span class="bg-red-500 text-[#6F7E87] font-normal p-2 rounded-full text-xs">NO</span>' : '<span class="bg-green-500 text-[#6F7E87] font-normal p-2 rounded-full text-xs">YES</span>';
    }

        public static function getProduct_img($listproduct_img, $parent_id = 0, $charLevel = '')
    {
        $result = '';
        foreach($listproduct_img as $key => $product_img){
            if ($product_img->ParentId == $parent_id) {
                $result .= '
                <tr id="' . $product_img->Product_imgID . '">
                    <td>'. $charLevel  . $product_img->Product_imgID . '</td>
                    <td><img class="w-24 h-32" src="/storage/uploads/' . $product_img->Img . '" alt=""></td>
                    <td>' . $product_img->ParentId . '</td>
                    <td>' . $product_img->ProductID . '</td>
                    <td>
                        <a href="/admin/product_imgs/edit/' . $product_img->Product_imgID . '">
                            <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                <span class="icon"><i class="fas fa-edit"></i></span>
                            </button>
                        </a>
                        <a href="#" onclick="removeRow1(' . $product_img->Product_imgID . ', \'/admin/product_imgs/destroy\')">
                            <button class="button small red --jb-modal" data-target="sample-modal-2" type="button">
                                <span class="icon"><i class="fas fa-trash"></i></span>
                            </button>
                        </a>
                    </td>
                </tr>';
                unset($listproduct_img[$key]);
                $result .= self::getProduct_img($listproduct_img, $product_img->Product_imgID, $charLevel . '|--');
            }
        }
        
        return $result; 
    }

}
