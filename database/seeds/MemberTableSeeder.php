<?php

use App\Member;
use App\Nominee;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $member = new Member();
            $member->nid = "123456789987654321" . $i;
            $member->name = "John Doe " . $i;
            $member->father_name = "Jone Doe " . $i;
            $member->mother_name = "Jane Doe " . $i;
            $member->present_address = "This is a fake present address " . $i;
            $member->permanent_address = "This is a fake permanent address " . $i;
            $member->dob = "12/12/199" . $i;
            $member->education = "SSC";
            $member->nationality = "Bangladeshi";
            $member->gender = "Male";
            $member->profession = "Private Service";
            $member->blood_group = "A+";
            $member->mobile_no = "01557897848";
            $member->email = "johndoe" . $i . "@example.com";
            $member->save();

            $nominee = new Nominee();
            $nominee->nid = "123456789987654321" . $i;
            $nominee->name = "John Doe-" . $i;
            $nominee->father_name = "Jone Doe " . $i;
            $nominee->mother_name = "Jane Doe " . $i;
            $nominee->address = "This is a fake ddress " . $i;
            $nominee->dob = "12/12/199" . $i;
            $nominee->relation = "Brother";
            $nominee->profession = "Private Service";
            $nominee->mobile_no = "01557897848";

            $member->nominee()->save($nominee);
        }
    }
}
