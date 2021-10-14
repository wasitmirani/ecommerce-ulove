<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Models\MetaBox as MetaBoxModel;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Category;
use Botble\Blog\Models\Post;
use Botble\Blog\Models\Tag;
use Botble\Language\Models\LanguageMeta;
use Botble\Slug\Models\Slug;
use Faker\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use MetaBox;
use SlugHelper;

class BlogSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->uploadFiles('news');

        Post::truncate();
        Category::truncate();
        Tag::truncate();
        Slug::where('reference_type', Post::class)->delete();
        Slug::where('reference_type', Tag::class)->delete();
        Slug::where('reference_type', Category::class)->delete();
        MetaBoxModel::where('reference_type', Post::class)->delete();
        MetaBoxModel::where('reference_type', Tag::class)->delete();
        MetaBoxModel::where('reference_type', Category::class)->delete();
        LanguageMeta::where('reference_type', Post::class)->delete();
        LanguageMeta::where('reference_type', Tag::class)->delete();
        LanguageMeta::where('reference_type', Category::class)->delete();

        $faker = Factory::create();

        $data = [
            'en_US' => [
                [
                    'name'       => 'Ecommerce',
                    'is_default' => true,
                ],
                [
                    'name' => 'Fashion',
                ],
                [
                    'name' => 'Electronic',
                ],
                [
                    'name' => 'Commercial',
                ],
            ],
            'vi'    => [
                [
                    'name'       => 'Thương mại điện tử',
                    'is_default' => true,
                ],
                [
                    'name' => 'Fashion',
                ],
                [
                    'name' => 'Electronic',
                ],
                [
                    'name' => 'Thương mại',
                ],
            ],
        ];

        foreach ($data as $locale => $categories) {
            foreach ($categories as $index => $item) {
                $category = $this->createCategory(Arr::except($item, 'children'), $locale, $index, 0, $index != 0);

                if (isset($item['children']) && !empty($item['children'])) {
                    foreach ($item['children'] as $childIndex => $child) {
                        $this->createCategory($child, $locale, $index + $childIndex, $category->id);
                    }
                }
            }
        }

        $data = [
            'en_US' => [
                [
                    'name' => 'General',
                ],
                [
                    'name' => 'Design',
                ],
                [
                    'name' => 'Fashion',
                ],
                [
                    'name' => 'Branding',
                ],
                [
                    'name' => 'Modern',
                ],
            ],
            'vi'    => [
                [
                    'name' => 'Chung',
                ],
                [
                    'name' => 'Thiết kế',
                ],
                [
                    'name' => 'Thời trang',
                ],
                [
                    'name' => 'Thương hiệu',
                ],
                [
                    'name' => 'Hiện đại',
                ],
            ],
        ];

        foreach ($data as $locale => $tags) {
            foreach ($tags as $index => $item) {
                $item['author_id'] = 1;
                $item['author_type'] = User::class;
                $tag = Tag::create($item);

                Slug::create([
                    'reference_type' => Tag::class,
                    'reference_id'   => $tag->id,
                    'key'            => Str::slug($tag->name),
                    'prefix'         => SlugHelper::getPrefix(Tag::class),
                ]);

                $originValue = null;

                if ($locale !== 'en_US') {
                    $originValue = LanguageMeta::where([
                        'reference_id'   => $index + 1,
                        'reference_type' => Tag::class,
                    ])->value('lang_meta_origin');
                }

                LanguageMeta::saveMetaData($tag, $locale, $originValue);
            }
        }

        $data = [
            'en_US' => [
                [
                    'name'   => '4 Expert Tips On How To Choose The Right Men’s Wallet',
                    'layout' => 'blog-right-sidebar',
                ],
                [
                    'name'   => 'Sexy Clutches: How to Buy & Wear a Designer Clutch Bag',
                    'layout' => 'blog-left-sidebar',
                ],
                [
                    'name'   => 'The Top 2020 Handbag Trends to Know',
                    'layout' => 'blog-full-width',
                ],
                [
                    'name'   => 'How to Match the Color of Your Handbag With an Outfit',
                    'layout' => 'blog-full-width',
                ],
                [
                    'name' => 'How to Care for Leather Bags',
                ],
                [
                    'name' => "We're Crushing Hard on Summer's 10 Biggest Bag Trends",
                ],
                [
                    'name' => 'Essential Qualities of Highly Successful Music',
                ],
                [
                    'name' => '9 Things I Love About Shaving My Head',
                ],
                [
                    'name' => 'Why Teamwork Really Makes The Dream Work',
                ],
                [
                    'name' => 'The World Caters to Average People',
                ],
                [
                    'name' => 'The litigants on the screen are not actors',
                ],
            ],
            'vi'    => [
                [
                    'name'   => '4 Lời khuyên của Chuyên gia về Cách Chọn Ví Nam Phù hợp',
                    'layout' => 'blog-right-sidebar',
                ],
                [
                    'name'   => 'Sexy Clutches: Cách Mua & Đeo Túi Clutch Thiết kế',
                    'layout' => 'blog-left-sidebar',
                ],
                [
                    'name'   => 'Xu hướng túi xách hàng đầu năm 2020 cần biết',
                    'layout' => 'blog-full-width',
                ],
                [
                    'name'   => 'Cách Phối Màu Túi Xách Của Bạn Với Trang Phục',
                    'layout' => 'blog-full-width',
                ],
                [
                    'name' => 'Cách Chăm sóc Túi Da',
                ],
                [
                    'name' => 'Chúng tôi đang nghiền ngẫm 10 xu hướng túi lớn nhất của mùa hè',
                ],
                [
                    'name' => 'Những phẩm chất cần thiết của âm nhạc thành công cao',
                ],
                [
                    'name' => '9 điều tôi thích khi cạo đầu',
                ],
                [
                    'name' => 'Tại sao làm việc theo nhóm thực sự biến giấc mơ thành công',
                ],
                [
                    'name' => 'Thế giới phục vụ cho những người trung bình',
                ],
                [
                    'name' => 'Các đương sự trên màn hình không phải là diễn viên',
                ],
            ],
        ];

        foreach ($data as $locale => $posts) {

            foreach ($posts as $index => $item) {
                $item['content'] = '<p>I have seen many people underestimating the power of their wallets. To them, they are just a functional item they use to carry. As a result, they often end up with the wallets which are not really suitable for them.</p>

<p>You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.</p>

<p style="text-align:center"><img alt="f4" src="/storage/news/1.jpg" /></p>

<p><br />
&nbsp;</p>

' . ($index == 3 ? '[featured-products title="Shop The Look" limit="6"][/featured-products]' : '') . '

<p><strong><em>For all of the reason above, here are 7 expert tips to help you pick up the right men&rsquo;s wallet for you:</em></strong></p>

<h4><strong>Number 1: Choose A Neat Wallet</strong></h4>

<p>The wallet is an essential accessory that you should go simple. Simplicity is the best in this case. A simple and neat wallet with the plain color and even&nbsp;<strong>minimalist style</strong>&nbsp;is versatile. It can be used for both formal and casual events. In addition, that wallet will go well with most of the clothes in your wardrobe.</p>

<p>Keep in mind that a wallet will tell other people about your personality and your fashion sense as much as other clothes you put on. Hence, don&rsquo;t go cheesy on your wallet or else people will think that you have a funny and particular style.</p>

<p style="text-align:center"><img alt="f5" src="/storage/news/2.jpg" /></p>

<p><br />
&nbsp;</p>
<hr />
<h4><strong>Number 2: Choose The Right Size For Your Wallet</strong></h4>

<p>You should avoid having an over-sized wallet. Don&rsquo;t think that you need to buy a big wallet because you have a lot to carry with you. In addition, a fat wallet is very ugly. It will make it harder for you to slide the wallet into your trousers&rsquo; pocket. In addition, it will create a bulge and ruin your look.</p>

<p>Before you go on to buy a new wallet, clean out your wallet and place all of the items from your wallet on a table. Throw away things that you would never need any more such as the old bills or the expired gift cards. Remember to check your wallet on a frequent basis to get rid of all of the old stuff that you don&rsquo;t need anymore.</p>

<p style="text-align:center"><img alt="f1" src="/storage/news/3.jpg" /></p>

<p><br />
&nbsp;</p>

<hr />
<h4><strong>Number 3: Don&rsquo;t Limit Your Options Of Materials</strong></h4>

<p>The types and designs of wallets are not the only things that you should consider when you go out searching for your best wallet. You have more than 1 option of material rather than leather to choose from as well.</p>

<p>You can experiment with other available options such as cotton, polyester and canvas. They all have their own pros and cons. As a result, they will be suitable for different needs and requirements. You should think about them all in order to choose the material which you would like the most.</p>

<p style="text-align:center"><img alt="f6" height="375" src="/storage/news/4.jpg" /></p>

<p><br />
&nbsp;</p>

<hr />
<h4><strong>Number 4: Consider A Wallet As A Long Term Investment</strong></h4>

<p>Your wallet is indeed an investment that you should consider spending a decent amount of time and effort on it. Another factor that you need to consider is how much you want to spend on your wallet. The price ranges of wallets on the market vary a great deal. You can find a wallet which is as cheap as about 5 to 7 dollars. On the other hand, you should expect to pay around 250 to 300 dollars for a high-quality wallet.</p>

<p>In case you need a wallet to use for a long time, it is a good idea that you should invest a decent amount of money on a wallet. A high quality wallet from a reputational brand with the premium quality such as cowhide leather will last for a long time. In addition, it is an accessory to show off your fashion sense and your social status.</p>

<p style="text-align:center"><img alt="f2" height="400" src="/storage/news/5.jpg" /></p>

<p>&nbsp;</p>
';

                $item['author_id'] = 1;
                $item['author_type'] = User::class;
                $item['views'] = $faker->numberBetween(100, 2500);
                $item['is_featured'] = $index < 10;
                $item['image'] = 'news/' . ($index + 1) . '.jpg';
                $item['description'] = 'You should pay more attention when you choose your wallets. There are a lot of them on the market with the different designs and styles. When you choose carefully, you would be able to buy a wallet that is catered to your needs. Not to mention that it will help to enhance your style significantly.';

                $post = Post::create(Arr::except($item, ['layout']));

                $layout = isset($item['layout']) ? $item['layout'] : null;
                if ($layout) {
                    MetaBox::saveMetaBoxData($post, 'layout', $layout);
                }

                $post->categories()->sync($locale == 'en_US' ? [
                    $faker->numberBetween(1, 2),
                    $faker->numberBetween(3, 4),
                ] : [$faker->numberBetween(5, 6), $faker->numberBetween(7, 8)]);

                $post->tags()->sync($locale == 'en_US' ? [1, 2, 3, 4, 5] : [6, 7, 8, 9, 10]);

                Slug::create([
                    'reference_type' => Post::class,
                    'reference_id'   => $post->id,
                    'key'            => Str::slug($post->name),
                    'prefix'         => SlugHelper::getPrefix(Post::class),
                ]);

                $originValue = null;

                if ($locale !== 'en_US') {
                    $originValue = LanguageMeta::where([
                        'reference_id'   => $index + 1,
                        'reference_type' => Post::class,
                    ])->value('lang_meta_origin');
                }

                LanguageMeta::saveMetaData($post, $locale, $originValue);
            }
        }
    }

    /**
     * @param array $item
     * @param string $locale
     * @param int $index
     * @param int $parentId
     * @param bool $isFeatured
     * @return Category|\Illuminate\Database\Eloquent\Model
     */
    protected function createCategory(
        array $item,
        string $locale,
        int $index,
        int $parentId = 0,
        bool $isFeatured = false
    ) {
        $faker = Factory::create();

        $item['description'] = $faker->text();
        $item['author_id'] = 1;
        $item['parent_id'] = $parentId;
        $item['is_featured'] = $isFeatured;

        $category = Category::create($item);

        Slug::create([
            'reference_type' => Category::class,
            'reference_id'   => $category->id,
            'key'            => Str::slug($category->name),
            'prefix'         => SlugHelper::getPrefix(Category::class),
        ]);

        $originValue = null;

        if ($locale !== 'en_US') {
            $originValue = LanguageMeta::where([
                'reference_id'   => $index + 1,
                'reference_type' => Category::class,
            ])->value('lang_meta_origin');
        }

        LanguageMeta::saveMetaData($category, $locale, $originValue);

        return $category;
    }
}
