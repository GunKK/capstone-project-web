<?php

namespace Database\Seeders;

use App\Models\AnswerMongoDB;
use App\Models\TestMongoDB;
use App\Models\QuestionMongoDB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            [
                'name' => 'Đố vui Việt Nam',
                'questions' => [
                    [
                        'title' => 'Dân gian',
                        'description' => 'Mồm bò mà không phải mồm bò. Đố là con gì? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Con ốc sên',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Con gà',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Con mèo',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Con rắn',
                                'is_correct' => false
                            ],
                        ],
                    ],
                    [
                        'title' => 'Hài hước',
                        'description' => 'Bỏ ngoài nướng trong, ăn ngoài bỏ trong là gì ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Nướng bắp ngô',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Chạy đua',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Đi xe đạp',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Xay lúa',
                                'is_correct' => false
                            ],
                        ],
                    ],
                    [
                        'title' => 'Mẹo',
                        'description' => 'Đi thì đứng, đứng thì ngã. Là cái gì? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Bàn chân',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Xe đạp (Xe máy)',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Con mèo',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Con rắn',
                                'is_correct' => false
                            ],
                        ],
                    ],
                    [
                        'title' => 'Mẹo',
                        'description' => 'Quần rộng nhất là quần gì? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Quần jeans',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Quần ống loe',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Quần short',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Quần đảo',
                                'is_correct' => true
                            ],
                        ],
                    ]
                    ,[
                        'title' => 'Dân gian',
                        'description' => 'Cái gì mà đi thì nằm, đứng cũng nằm, nhưng nằm lại đứng? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Bàn tay',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Bàn chân',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Con mèo',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Con rắn',
                                'is_correct' => false
                            ],
                        ],
                    ]
                    ,[
                        'title' => 'Dân gian',
                        'description' => 'Đầu đỏ, mỏ đen Xuống tắm ao sen Lên cày ruộng cạn',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Cây bút',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Con gà',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Con mèo',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Con rắn',
                                'is_correct' => false
                            ],
                        ],
                    ]
                    ,[
                        'title' => 'Dân gian',
                        'description' => 'Môn gì càng thắng càng thua? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Đua xe (xe đạp, xe máy)',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Cầu lồng',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Bóng đá',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Bóng bàn',
                                'is_correct' => false
                            ],
                        ],
                    ]
                ]
            ],
            [
                'name' => 'Lịch sử Việt Nam',
                'questions' => [
                    [
                        'title' => 'Dân gian',
                        'description' => 'Vua nào trong buổi hàn vi ở chùa?',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Lý Công Uẩn',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Lê Thái Tông',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Bảo Đại',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Vua Minh Mạng',
                                'is_correct' => false
                            ],
                        ],
                    ],
                    [
                        'title' => 'Hài hước',
                        'description' => 'Tướng nào dùng bút đánh lừa Vương Thông?',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Nguyễn Trãi',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Võ Nguyên Giáp',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Tô Vĩnh Diện',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Lê Hoàn',
                                'is_correct' => false
                            ],
                        ],
                    ],
                    [
                        'title' => 'Mẹo',
                        'description' => 'Voi ai nhỏ lệ ở dòng Hoá Giang?',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Bà Trưng Trắc',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Bà Triệu',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Bà Mai Phục Loan',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Tất cả đều sai',
                                'is_correct' => false
                            ],
                        ],
                    ],
                    [
                        'title' => 'Mẹo',
                        'description' => 'Rắc lông ngỗng, thiếp nghe chàng hại cha? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Bà Trưng',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Bà Triệu',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Tất cả đều sai',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Mỵ Châu',
                                'is_correct' => true
                            ],
                        ],
                    ]
                    ,[
                        'title' => 'Dân gian',
                        'description' => 'Vua nào chống Pháp bị đầy đảo xa? ',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Bảo Đại',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Hàm Nghi',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Gia Long',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Tự Đức',
                                'is_correct' => false
                            ],
                        ],
                    ]
                    ,[
                        'title' => 'Dân gian',
                        'description' => 'Vua nào thành lập hội thơ Tao Đàn?',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Lê Thánh Tông',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Lý Nhân Tông',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Ngô Quyền',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Trần Nhân Tông',
                                'is_correct' => false
                            ],
                        ],
                    ]
                    ,[
                        'title' => 'Dân gian',
                        'description' => 'Sánh duyên công chúa Ngọc Hân, vua nào?',
                        'score' => 10,
                        'answers' => [
                            [
                                'content' => 'Quang Trung',
                                'is_correct' => true
                            ],
                            [
                                'content' => 'Nguyễn Ánh',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Trần Nhân Tông',
                                'is_correct' => false
                            ],
                            [
                                'content' => 'Lý Công Uẩn',
                                'is_correct' => false
                            ],
                        ],
                    ]
                ]
            ],
        ];

        // try {
        //     DB::beginTransaction();

            foreach($tests as $t) {
                TestMongoDB::create([
                    'name' => $t['name']
                ]);
                $testId = TestMongoDB::where(['name' => $t['name']])->first()->id;
                foreach($t['questions'] as $q) {
                    $question = new QuestionMongoDB([
                        'test_id' => $testId,
                        'title' => $q['title'],
                        'description' => $q['description'],
                        'score' => $q['score']
                    ]);

                    foreach($q['answers'] as $a) {
                        $answer = new AnswerMongoDB([
                            'content' => $a['content'],
                            'is_correct' => $a['is_correct'],
                        ]);

                        $question->answers()->associate($answer);
                        $answer->save();
                    }
                    $question->save();
                }
            }
        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     $e->getMessage();
        // }



        /*

        TestMongoDB::insert([
            ['name' => 'Đố vui Việt Nam'],
            ['name' => 'Lịch sử Việt Nam'],
        ]);

        $testId = TestMongoDB::all()->pluck('_id')->toArray();

        QuestionMongoDB::insert([
            [
                'test_id' => $testId[0],
                'title' => 'Dân gian',
                'description' => 'Mồm bò mà không phải mồm bò. Đố là con gì? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Con ốc sên',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Con gà',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Con mèo',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Con rắn',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'test_id' => $testId[0],
                'title' => 'Hài hước',
                'description' => 'Bỏ ngoài nướng trong, ăn ngoài bỏ trong là gì ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Nướng bắp ngô',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Chạy đua',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Đi xe đạp',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Xay lúa',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'test_id' => $testId[0],
                'title' => 'Mẹo',
                'description' => 'Đi thì đứng, đứng thì ngã. Là cái gì? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Bàn chân',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Xe đạp (Xe máy)',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Con mèo',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Con rắn',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'test_id' => $testId[0],
                'title' => 'Mẹo',
                'description' => 'Quần rộng nhất là quần gì? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Quần jeans',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Quần ống loe',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Quần short',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Quần đảo',
                        'is_correct' => true
                    ],
                ],
            ]
            ,[
                'test_id' => $testId[0],
                'title' => 'Dân gian',
                'description' => 'Cái gì mà đi thì nằm, đứng cũng nằm, nhưng nằm lại đứng? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Bàn tay',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Bàn chân',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Con mèo',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Con rắn',
                        'is_correct' => false
                    ],
                ],
            ]
            ,[
                'test_id' => $testId[0],
                'title' => 'Dân gian',
                'description' => 'Đầu đỏ, mỏ đen Xuống tắm ao sen Lên cày ruộng cạn',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Cây bút',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Con gà',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Con mèo',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Con rắn',
                        'is_correct' => false
                    ],
                ],
            ]
            ,[
                'test_id' => $testId[0],
                'title' => 'Dân gian',
                'description' => 'Môn gì càng thắng càng thua? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Đua xe (xe đạp, xe máy)',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Cầu lồng',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Bóng đá',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Bóng bàn',
                        'is_correct' => false
                    ],
                ],
            ]
        ]);

        QuestionMongoDB::insert([
            [
                'test_id' => $testId[1],
                'title' => 'Dân gian',
                'description' => 'Vua nào trong buổi hàn vi ở chùa?',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Lý Công Uẩn',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Lê Thái Tông',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Bảo Đại',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Vua Minh Mạng',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'test_id' => $testId[1],
                'title' => 'Hài hước',
                'description' => 'Tướng nào dùng bút đánh lừa Vương Thông?',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Nguyễn Trãi',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Võ Nguyên Giáp',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Tô Vĩnh Diện',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Lê Hoàn',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'test_id' => $testId[1],
                'title' => 'Mẹo',
                'description' => 'Voi ai nhỏ lệ ở dòng Hoá Giang?',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Bà Trưng Trắc',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Bà Triệu',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Bà Mai Phục Loan',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Tất cả đều sai',
                        'is_correct' => false
                    ],
                ],
            ],
            [
                'test_id' => $testId[1],
                'title' => 'Mẹo',
                'description' => 'Rắc lông ngỗng, thiếp nghe chàng hại cha? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Bà Trưng',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Bà Triệu',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Tất cả đều sai',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Mỵ Châu',
                        'is_correct' => true
                    ],
                ],
            ]
            ,[
                'test_id' => $testId[1],
                'title' => 'Dân gian',
                'description' => 'Vua nào chống Pháp bị đầy đảo xa? ',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Bảo Đại',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Hàm Nghi',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Gia Long',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Tự Đức',
                        'is_correct' => false
                    ],
                ],
            ]
            ,[
                'test_id' => $testId[1],
                'title' => 'Dân gian',
                'description' => 'Vua nào thành lập hội thơ Tao Đàn?',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Lê Thánh Tông',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Lý Nhân Tông',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Ngô Quyền',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Trần Nhân Tông',
                        'is_correct' => false
                    ],
                ],
            ]
            ,[
                'test_id' => $testId[1],
                'title' => 'Dân gian',
                'description' => 'Sánh duyên công chúa Ngọc Hân, vua nào?',
                'score' => 10,
                'answers' => [
                    [
                        'content' => 'Quang Trung',
                        'is_correct' => true
                    ],
                    [
                        'content' => 'Nguyễn Ánh',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Trần Nhân Tông',
                        'is_correct' => false
                    ],
                    [
                        'content' => 'Lý Công Uẩn',
                        'is_correct' => false
                    ],
                ],
            ]
        ]);

        */
    }
}
