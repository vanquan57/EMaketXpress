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
                    <td>' . self::Active($category->Active) . ' </td>
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

    // Header 
    
}
