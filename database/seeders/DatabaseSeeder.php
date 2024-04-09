<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\domains;
use App\Models\level;
use App\Models\technicals;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('technicals')->insert([[
            'name' => 'PHP',
        ],[
            'name' => 'RUBY',
        ],[
            'name' => 'GOLANG',
        ],[
            'name' => 'JAVA',
        ],[
            'name' => 'Javascript',
        ],[
            'name' => 'C#',
        ]]);

        DB::table('domains')->insert([[
            'name' => 'marketing',
            'is_active' => 0
        ],[
            'name' => 'Công nghệ thông tin',
            'is_active' => 0
        ],[
            'name' => 'Thiết kế đồ họa',
            'is_active' => 0
        ],[
            'name' => 'Chăm sóc sắc đẹp',
            'is_active' => 0
        ]]);

        DB::table('levels')->insert([[
            'name' => 'Cấp 1',
            'description' => 'Mô tả cấp độ',
        ],[
            'name' => 'Cấp 2',
            'description' => 'Mô tả cấp độ',
        ],[
            'name' => 'Cấp 3',
            'description' => 'Mô tả cấp độ',
        ],[
            'name' => 'Cấp 4',
            'description' => 'Mô tả cấp độ',
        ]]);


        DB::table('settings')->insert([
            [
            'key' => 'business_logo',
            'title' => 'Ảnh logo doanh nghiệp 1',
            'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/img-client5.png',
                'created_at' => Carbon::now()
        ],
            [
                'key' => 'business_logo',
                'title' => 'Ảnh logo doanh nghiệp 2',
                'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/img-client6.png',
                'created_at' => Carbon::now()
            ],
            [
                'key' => 'business_logo',
                'title' => 'Ảnh logo doanh nghiệp 3',
                'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/img-client1.png',
                'created_at' => Carbon::now()
            ],
            [
                'key' => 'business_logo',
                'title' => 'Ảnh logo doanh nghiệp 4',
                'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/img-client2.png',
                'created_at' => Carbon::now()
            ],
            [
                'key' => 'business_logo',
                'title' => 'Ảnh logo doanh nghiệp 5',
                'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/img-client3.png',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'business_logo',
                'title' => 'Ảnh logo doanh nghiệp 6',
                'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/img-client4.png',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'content_business',
                'title' => 'Nội dung content',
                'content' => '<div class="section-title text-start mb-4"><span>Planning on Developing a Product</span>
                            <h2 class="wow">Popular Features that your <strong>Business Needs</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.</p>
                        </div>
                        <ul class="list-unstyled icons-listing theme-primary mb-4 w-half check">
                            <li>Intregrations</li>
                            <li>Business Strategy</li>
                            <li>Business Setup</li>
                            <li>Easy Documentation</li>
                        </ul>',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'business_image',
                'title' => 'Ảnh Nội dung content',
                'content' => 'https://demo.exptheme.com/serenite/wp-content/uploads/2022/08/tabbing_img-1.png',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'title_question_case',
                'title' => 'Tiêu đề Everything You Need To Know To Work Better',
                'content' => '<h2 class="wow">Everything you need to <strong>Know to work better</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.</p>',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'question_case',
                'title' => 'Câu hỏi và trả lời<< Phải có keyword "Question" và "Answer" để phân biệt',
                'content' => 'Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.
                            Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'question_case',
                'title' => 'Câu hỏi và trả lời<< Phải có keyword "Question" và "Answer" để phân biệt',
                'content' => 'Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.
                            Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'question_case',
                'title' => 'Câu hỏi và trả lời<< Phải có keyword "Question" và "Answer" để phân biệt',
                'content' => 'Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.
                            Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'question_case',
                'title' => 'Câu hỏi và trả lời<< Phải có keyword "Question" và "Answer" để phân biệt',
                'content' => 'Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.
                            Question: First and foremost, you never want to go?
                            Answer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                            accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor sit
                            amet, consectetur adipiscing.',
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'title_our_team',
                'title' => 'Tiêu đề our team',
                'content' => "Our Buddy's Always Ready
    <strong>To Solve Your Issues</strong>",
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'des_our_team',
                'title' => 'mô tả our team',
                'content' => "  <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac
                                habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.
                            </p>",
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'title_project',
                'title' => 'Tiêu đề Project',
                'content' => "Our Buddy's Always Ready
    <strong>To Solve Your Issues</strong>",
                'created_at' => Carbon::now(),
            ],
            [
                'key' => 'des_project',
                'title' => 'Mô tả project',
                'content' => "  <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac
                                habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.
                            </p>",
                'created_at' => Carbon::now(),
            ],
        ]);


    }
}
