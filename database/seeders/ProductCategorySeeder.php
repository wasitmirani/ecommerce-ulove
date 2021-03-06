<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Slug\Models\Slug;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use MetaBox;
use SlugHelper;

class ProductCategorySeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->uploadFiles('product-categories');

        $categories = [
            [
                'name' => 'Hot Promotions',
                'icon' => 'far fa-star',
            ],
            [
                'name'        => 'Electronics',
                'icon'        => 'wowy-font-cpu',
                'image'       => 'product-categories/1.jpg',
                'is_featured' => true,
                'children'    => [
                    [
                        'name' => 'Home Audio & Theaters',
                    ],
                    [
                        'name' => 'TV & Videos',
                    ],
                    [
                        'name' => 'Camera, Photos & Videos',
                    ],
                    [
                        'name' => 'Cellphones & Accessories',
                    ],
                    [
                        'name' => 'Headphones',
                    ],
                    [
                        'name' => 'Videos games',
                    ],
                    [
                        'name' => 'Wireless Speakers',
                    ],
                    [
                        'name' => 'Office Electronic',
                    ],
                ],
            ],
            [
                'name'        => 'Clothing',
                'icon'        => 'wowy-font-tshirt',
                'image'       => 'product-categories/2.jpg',
                'is_featured' => true,
            ],
            [
                'name'        => 'Computers',
                'icon'        => 'wowy-font-desktop',
                'image'       => 'product-categories/3.jpg',
                'is_featured' => true,
                'children'    => [
                    [
                        'name' => 'Computer & Tablets',
                    ],
                    [
                        'name' => 'Laptop',
                    ],
                    [
                        'name' => 'Monitors',
                    ],
                    [
                        'name' => 'Computer Components',
                    ],
                ],
            ],
            [
                'name'        => 'Home & Kitchen',
                'icon'        => 'wowy-font-home',
                'image'       => 'product-categories/4.jpg',
                'is_featured' => true,
            ],
            [
                'name'        => 'Health & Beauty',
                'icon'        => 'wowy-font-dress',
                'image'       => 'product-categories/5.jpg',
                'is_featured' => true,
            ],
            [
                'name'        => 'Jewelry & Watch',
                'icon'        => 'wowy-font-diamond',
                'image'       => 'product-categories/6.jpg',
                'is_featured' => true,
            ],
            [
                'name'        => 'Technology Toys',
                'icon'        => 'far fa-microchip',
                'image'       => 'product-categories/7.jpg',
                'is_featured' => true,
                'children'    => [
                    [
                        'name' => 'Drive & Storages',
                    ],
                    [
                        'name' => 'Gaming Laptop',
                    ],
                    [
                        'name' => 'Security & Protection',
                    ],
                    [
                        'name' => 'Accessories',
                    ],
                ],
            ],
            [
                'name'        => 'Phones',
                'icon'        => 'wowy-font-smartphone',
                'image'       => 'product-categories/8.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Babies & Moms',
                'icon' => 'wowy-font-teddy-bear',
            ],
            [
                'name' => 'Sport & Outdoor',
                'icon' => 'wowy-font-kite',
            ],
            [
                'name' => 'Books & Office',
                'icon' => 'far fa-book',
            ],
            [
                'name' => 'Cars & Motorcycles',
                'icon' => 'far fa-car',
            ],
            [
                'name' => 'Home Improvements',
                'icon' => 'wowy-font-home',
            ],
        ];

        ProductCategory::truncate();
        Slug::where('reference_type', ProductCategory::class)->delete();

        foreach ($categories as $index => $item) {
            $category = $this->createCategory($item, $index);

            if (isset($item['children']) && !empty($item['children'])) {
                foreach ($item['children'] as $childIndex => $child) {
                    $this->createCategory($child, $index + $childIndex, $category->id);
                }
            }
        }

        // Translations
        DB::table('ec_product_categories_translations')->truncate();

        $translations = [
            [
                'name' => 'Khuy???n m??i n???i b???t',
            ],
            [
                'name'     => '??i???n t???',
                'children' => [
                    [
                        'name' => '??m thanh v?? h??nh ???nh',
                    ],
                    [
                        'name' => 'TV & Videos',
                    ],
                    [
                        'name' => 'M??y ???nh, ???nh & Videos',
                    ],
                    [
                        'name' => '??i???n tho???i & Ph??? ki???n',
                    ],
                    [
                        'name' => 'Tai nghe',
                    ],
                    [
                        'name' => 'Tr?? ch??i',
                    ],
                    [
                        'name' => 'Tai nghe kh??ng d??y',
                    ],
                    [
                        'name' => '??i???n t??? v??n ph??ng',
                    ],
                ],
            ],
            [
                'name' => 'Qu???n ??o',
            ],
            [
                'name'     => 'M??y t??nh',
                'children' => [
                    [
                        'name' => 'M??y t??nh v?? m??y t??nh b???ng',
                    ],
                    [
                        'name' => 'M??y vi t??nh',
                    ],
                    [
                        'name' => 'M??n h??nh',
                    ],
                    [
                        'name' => 'Thi???t b??? m??y t??nh',
                    ],
                ],
            ],
            [
                'name' => '????? d??ng nh?? b???p',
            ],
            [
                'name' => 'S???c kh???e & l??m ?????p',
            ],
            [
                'name' => '?????ng h??? & trang s???c',
            ],
            [
                'name'     => '????? ch??i c??ng ngh???',
                'children' => [
                    [
                        'name' => 'Thi???t b??? l??u tr???',
                    ],
                    [
                        'name' => 'M??y t??nh ch??i game',
                    ],
                    [
                        'name' => 'B???o m???t',
                    ],
                    [
                        'name' => 'Ph??? ki???n',
                    ],
                ],
            ],
            [
                'name' => '??i???n tho???i',
            ],
            [
                'name' => 'M??? v?? b??',
            ],
            [
                'name' => 'Th??? thao & ngo??i tr???i',
            ],
            [
                'name' => 'S??ch & V??n ph??ng',
            ],
            [
                'name' => '??to & Xe m??y',
            ],
            [
                'name' => 'Thi???t b??? gia ????nh',
            ],
        ];

        $count = 1;
        foreach ($translations as $translation) {

            $translation['lang_code'] = 'vi';
            $translation['ec_product_categories_id'] = $count;

            DB::table('ec_product_categories_translations')->insert(Arr::except($translation, ['children']));

            if (isset($translation['children']) && !empty($translation['children'])) {
                foreach ($translation['children'] as $child) {
                    $child['lang_code'] = 'vi';
                    $child['ec_product_categories_id'] = $count + 1;

                    DB::table('ec_product_categories_translations')->insert($child);

                    $count++;
                }
            }

            $count++;
        }
    }

    /**
     * @param array $item
     * @param int $index
     * @param int $parentId
     * @return ProductCategory|\Illuminate\Database\Eloquent\Model
     */
    protected function createCategory(array $item, int $index, int $parentId = 0)
    {
        $item['order'] = $index;
        $item['parent_id'] = $parentId;

        $category = ProductCategory::create(Arr::except($item, ['icon', 'children']));

        if (!empty($item['icon'])) {
            MetaBox::saveMetaBoxData($category, 'icon', $item['icon']);
        }

        Slug::create([
            'reference_type' => ProductCategory::class,
            'reference_id'   => $category->id,
            'key'            => Str::slug($category->name),
            'prefix'         => SlugHelper::getPrefix(ProductCategory::class),
        ]);

        return $category;
    }
}
