<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        $data = [
            ['name' => 'Hadjia Ahmed', 'content' => 'I was initially skeptical when a friend referred me to Great Jasmine. However, I was pleasantly surprised by the warm reception I got. They also understood my need and were able to provide a caregiver for my dad in Kano. I always had challenges finding the right caregiver for my aging father and had to regularly travel from Abuja to Kano to ensure he was being taken care of the right way. Once Great Jasmine stepped in, its like I never left Kano. I get regular feedbacks and the caregiver also acts as a companion for my dad and the fit is perfect. I get regular reports on his welfare and my father is very happy. Now I feel the caregiver is trying to replace me lol. Thank you Great Jasmine for having my back. I highly recommend their services to anyone in need. Hadjia Ahmed'],
            ['name' => '', 'content' => 'Ive been using the governess services of Great Jasmine and couldnt recommend them more. As a busy expat living in Lagos with two kids, the support of one of their governesses has been invaluable in helping me and my partner (who also works full time) manage our household, help manage the kids schedules and just help keep us sane and assist us with our hectic lives! Our governess is trustworthy, always punctual - something essential for us, patient and communicative. And most importantly the kids love her. I dont know what we would do without her. Highly recommended for anyone looking for help with their children, tutoring or general household management. Daniel S'],
            ['name' => 'Princess Aberefia', 'content' => 'My governess delivers excellent service to my daughters. She is dedicated, hardworking, honest, and the sweetest person I have ever met (my confidant). School run is never late, homework is always done, play dates are always fun, and birthdays etc. are never forgotten (love the cakes and gifts). With my very busy schedule I dont have to worry about my girls (one is in primary school and the other in secondary school). I am very confident of their safety when I travel (which is often), its like I am always home. Thank you, Great Jasmine, for being there for us. You all deserve a 5 Star for excellent service delivery.'],
            ['name' => 'Madam Chizoma', 'content' => 'I have a very busy schedule and travel a lot. My major concern was the care and nurturing of my children. Great Jasmine has impressed me on multiple levels. When I spoke to the team, they had an uncanny sense for what I needed. They really listened effectively to my concerns and brought forward a beautiful solution, and did it all in a timely manner. My governess has been with me for over a year and all this while, Great Jasmine has been hands-on, working with her to ensure she effectively executes her duties. Sometimes I wonder if they ever sleep? I have seen positive results with my children and effective running of my home. I am also impressed at the quality of personnel they have in the US and the UK, thus making vacations a real pleasure. I keep asking myself why I did not use their services earlier. I recommend Great Jasmine unequivocally and in a heartbeat.'],
            ['name' => 'Dr. Enitan Babalola', 'content' => 'Amazing service, excellent and knowledgeable staff. I will recommend your services to anyone with no hesitation. Just into the first month of our Governess resuming, we were pleasantly surprised when a lovely cake and card where delivered to our home for my son who just turned 7. My son who was very shy quickly formed a close bond with his governess. He is more confident now and doing well at school. Great Jasmine service is worth every penny for their word is their bond and they go above and beyond to cater to our individual needs. Thank you team Great Jasmine. Well done.'],
            ['name' => 'Mrs. Kike Ajayi', 'content' => 'I needed to get my mum to Lagos from Ibadan to see a specialist. However, my busy schedule and family commitments made this difficult, till a friend recommended Great Jasmine. I was initially skeptical, but in hindsight I will forever be grateful to my friend. Immediately I contacted the team, it was like a dream. They sent a Care Giver to Ibadan. This lady was amazing. She made all travel arrangements, ensured my mum’s bags were packed, all medications listed out, and her referral note scanned to the specialist. My mum called and said she had never met anyone who had a ready smile and warm disposition. She immediately fell in love with her Care Giver and became gist buddies all through the two weeks she was here at Lagos and back at Ibadan. I even got a little jealous of all the attention my mum was getting. Honestly, I can’t believe this is a Nigerian run establishment. Kudos to you all. Thank you for the first-class treatment my mum received'],
            ['name' => 'Mrs. Nwaghodoh', 'content' => 'My governess provided excellent and professional service. I highly recommend Great Jasmine and will always use their service. Wow is all I can say. Thank you Great Jasmine.'],
            
          ];

        foreach($data as $dat){
            Testimonial::create($dat);
        }


    }
}
