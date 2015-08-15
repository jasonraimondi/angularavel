<?php

use Illuminate\Database\Seeder;

use App\Project;

class ProjectsTableSeeder extends Seeder {

    public function run()
    {

        Project::create(array(
            'title'        	    => 'AC Filters Today',
            'slug'        	    => str_slug('AC Filters Today'),
            'link'   		    => 'www.acfilterstoday.com',
            'short_description' => "AC Filters Today is air filter based eCommerce site I built for Air Around the Clock, one of the largest AC Repair Companies in South Florida. The site is built on the Magento eCommerce platform and I am the sole developer and designer of the site. The site is already in it's soft launch phase and is scheduled for a hard launch in Fall of 2014.",
            'description'       => '<p>AC Filters Today is an eCommerce site I built for Air Around the Clock, one of the largest AC Repair Companies in South Florida. The site is built on the Magento eCommerce platform and I am the sole developer and designer of the site.</p><p><img src="http://jason.dev:8888/images/original/ac-1-home.png" alt="TITLE"></p><p>The site is already in it&apos;s soft launch phase and is scheduled for a hard launch in Fall of 2014.</p>',
            'featured_image'    => 'images/projects/' . str_slug('AC Filters Today') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Ace Blueprinting & Graphics',
            'slug'        	    => str_slug('Ace Blueprinting & Graphics'),
            'link'   		    => 'www.aceblueprinting.com',
            'short_description' => "A simple static site built for Ace Blueprinting & Graphics using the Zurb Foundation 4 Framework.",
            'description'       => '<p><img src="http://jason.dev:8888/images/original/ace-1-home.png" alt="TITLE"></p><p>A simple static site built for Ace Blueprinting &amp; Graphics using the Zurb Foundation 4 Framework.</p>',
            'featured_image'    => 'images/projects/' . str_slug('Ace Blueprinting & Graphics') . '.png',
            'active'            => false,
        ));

        Project::create(array(
            'title'        	    => 'Aircraft Turbine Works',
            'slug'        	    => str_slug('Aircraft Turbine Works'),
            'link'   		    => 'www.aircraftturbineworks.com',
            'short_description' => "A simple static site built from scratch for Aircraft Turbine Works using the Zurb Foundation 4 Framework.",
            'description'       => '',
            'featured_image'    => 'images/projects/' . str_slug('Aircraft Turbine Works') . '.png',
            'active'            => false,
        ));

        Project::create(array(
            'title'        	    => 'Ashley Carlisle',
            'slug'        	    => str_slug('Ashley Carlisle'),
            'link'   		    => 'www.ashleycarlisle.com',
            'short_description' => "A portfolio site built using WordPress for Photographer Ashley Carlisle.",
            'description'       => '',
            'featured_image'    => 'images/projects/' . str_slug('Ashley Carlisle') . '.png',
            'active'            => false,
        ));

        Project::create(array(
            'title'        	    => 'Break Jack Out-of-the-Box',
            'slug'        	    => str_slug('Break Jack Out-of-the-Box'),
            'link'   		    => 'http://www.vimeo.com/75551487',
            'short_description' => "One of my first stop motion videos consisting of over 1500 individually shot and edited photographs.",
            'description'       => '<p class="video-wrapper"><iframe src="https://player.vimeo.com/video/75551487" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></p>',
            'featured_image'    => 'images/projects/' . str_slug('Break Jack Out-of-the-Box') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'California HR',
            'slug'        	    => str_slug('California HR'),
            'link'   		    => 'http://www.vimeo.com/75551615',
            'short_description' => "A short video built in After Effects built for a startup called Event Commercials for a human resources event that took place in California.",
            'description'       => '<p class="video-wrapper"><iframe src="https://player.vimeo.com/video/75551615" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></p>',
            'featured_image'    => 'images/projects/' . str_slug('California HR') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Cure Boredom',
            'slug'        	    => str_slug('Cure Boredom'),
            'link'   		    => 'http://www.vimeo.com/29276657',
            'short_description' => "A video montage shot & edited myself.",
            'description'       => '<p class="video-wrapper"><iframe src="https://player.vimeo.com/video/75551487" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></p>',
            'featured_image'    => 'images/projects/' . str_slug('Cure Boredom') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Digital Canvas Design',
            'slug'        	    => str_slug('Digital Canvas Design'),
            'link'   		    => 'www.digitalcanvasdesign.net',
            'short_description' => "A simple static site built for my start up company to showcase my work..",
            'description'       => '<p><img src="http://jason.dev:8888/images/original/digital-1-home.png" alt="TITLE"></p><p><img src="http://jason.dev:8888/images/original/digital-3-web.png" alt="TITLE"></p><p><img src="http://jason.dev:8888/images/original/digital-2-samples.png" alt="TITLE"></p>',
            'featured_image'    => 'images/projects/' . str_slug('Digital Canvas Design') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Home Study Experts',
            'slug'        	    => str_slug('Home Study Experts'),
            'link'   		    => 'www.homestudyexperts.com/',
            'short_description' => "Built using WordPress for a start up.",
            'description'       => '<p><img src="http://jason.dev:8888/images/original/homestudy-1-home.png" alt="TITLE"></p>',
            'featured_image'    => 'images/projects/' . str_slug('Home Study Experts') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Kim Calderone',
            'slug'        	    => str_slug('Kim Calderone'),
            'link'   		    => 'www.kimcalderone.com',
            'short_description' => "A portfolio site built on WordPress for Graphic Designer Kimberly Calderone.",
            'description'       => '<p><img src="http://jason.dev:8888/images/original/kim-1-home.png" alt="TITLE"></p><p>A portfolio site built on WordPress for Graphic Designer Kimberly Calderone.</p>',
            'featured_image'    => 'images/projects/' . str_slug('Kim Calderone') . '.png',
            'active'            => false,
        ));

        Project::create(array(
            'title'        	    => 'Lukly',
            'slug'        	    => str_slug('Lukly'),
            'link'   		    => 'www.lukly.co',
            'short_description' => '',
            'description'       => '<p><img src="http://jason.dev:8888/images/original/lukly-2-signup.png" alt="TITLE"></p>',
            'featured_image'    => 'images/projects/' . str_slug('Lukly') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Much Ado About Portraits',
            'slug'        	    => str_slug('Much Ado About Portraits'),
            'link'   		    => 'http://www.vimeo.com/75548944',
            'short_description' => '',
            'description'       => '<p class="video-wrapper"><iframe src="https://player.vimeo.com/video/75548944" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></p>',
            'featured_image'    => 'images/projects/' . str_slug('Much Ado About Portraits') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'ROI Tracking Numbers',
            'slug'        	    => str_slug('ROI Tracking Numbers'),
            'link'   		    => 'www.roitrackingnumbers.com/',
            'short_description' => '',
            'description'       => '',
            'featured_image'    => 'images/projects/' . str_slug('ROI Tracking Numbers') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Satchels',
            'slug'        	    => str_slug('Satchels'),
            'link'   		    => 'http://www.youtube.com/watch?v=KzMNohjeAAo',
            'short_description' => "A collaboration project with artist Marc Paper Scissors(www.marcpaperscissors.com), this video juxtaposes the making a pizza with the making of a mural at the restaurant Satchel's in Gainesville, Florida.Shot on a Nikon D3100 using a 15-55mm Nikkor lense as well as a Belomo 8mm Wide Angle Lense and edited in Adobe Premier Pro.",
            'description'       => '<p class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/KzMNohjeAAo" frameborder="0" allowfullscreen=""></iframe></p><p>This video juxtaposes the making a pizza with the making of a mural at the restaurant Satchel&apos;s in Gainesville, Florida.Shot on a Nikon D3100 using a 15-55mm Nikkor lense as well as a Belomo 8mm Wide Angle Lense and edited in Adobe Premier Pro.</p>',
            'featured_image'    => 'images/projects/' . str_slug('Satchels') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'Scotty Knuckles',
            'slug'        	    => str_slug('Scotty Knuckles'),
            'link'   		    => 'www.scottyknuckles.com',
            'short_description' => "A portfolio site built on WordPress for Tattoo Artist Scott Milyanovich.",
            'description'       => '<p><img src="http://jason.dev:8888/images/original/scott-1-home.png" alt="TITLE"></p><p>A portfolio site built on WordPress for Tattoo Artist Scott Milyanovich.</p>',
            'featured_image'    => 'images/projects/' . str_slug('Scotty Knuckles') . '.png',
            'active'            => false,
        ));

        Project::create(array(
            'title'        	    => 'Student Game Day',
            'slug'        	    => str_slug('Student Game Day'),
            'link'   		    => null,
            'short_description' => '',
            'description'       => '<p><img src="http://jason.dev:8888/images/original/student-2-event.jpg" alt="TITLE"></p><p><img src="http://jason.dev:8888/images/original/student-1-home.png" alt="TITLE"></p><p><img src="http://jason.dev:8888/images/original/student-3-tickets.jpg" alt="TITLE"></p><p><img src="http://jason.dev:8888/images/original/student-4-account.jpg" alt="TITLE"></p>',
            'featured_image'    => 'images/projects/' . str_slug('Student Game Day') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'        	    => 'The Door',
            'slug'        	    => str_slug('The Door'),
            'link'   		    => 'http://www.vimeo.com/33575769',
            'short_description' => "This Shit ROCKS",
            'description'       => '<p class="video-wrapper"><iframe src="https://player.vimeo.com/video/33575769" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></p>',
            'featured_image'    => 'images/projects/' . str_slug('The Door') . '.png',
            'active'            => true,
        ));

        Project::create(array(
            'title'             => 'The Portal',
            'slug'              => str_slug('The Portal'),
            'link'              => 'http://www.vimeo.com/32945520',
            'short_description' => "This Shit ROCKS",
            'description'       => '<p class="video-wrapper"><iframe src="https://player.vimeo.com/video/32945520" width="500" height="281" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></p>',
            'featured_image'    => 'images/projects/' . str_slug('The Portal') . '.png',
            'active'            => true,
        ));
    }

}