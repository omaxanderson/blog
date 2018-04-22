@extends('layouts.app')

@section('content')

  <div class='col-sm-8 offset-sm-2'>

    <h1 class='mb-3'>About Me</h1>

    <p>Hello! My name is O Max Anderson and I am currently a senior Computer Science
      major at Miami University. I'm on track to graduate in May and then I'll
      be looking for a full time position as a software developer.</p>

    <p>During my sophomore year of college, I still hadn't figured out what I wanted
      to major in. I was looking for classes to fill up hours and decided that since
      I liked to play video games, I'd give a CS class a shot. The first time I hit
      'Run' in my Eclipse IDE and saw my Java program add two numbers together, I fell in love.
      Then I learned about loops and my brain just about exploded. Conditionals,
      methods, classes; everything was so interesting!</p>

    <p>Then I tried to write a program in C and everything came crashing down around me.</p>

    <img src="{{ asset('images/code1.jpg') }}" class='float-left col-sm-8'>

    <p>Just kidding, C was tough but learning how a program interacted with the hardware
      was just another fascinating thing to figure out. Seg faults still haunt my hopes and dreams
      but fortunately I think that's part of the learning process.</p>

    <p>What I'm trying to say here is that I love learning. And I love coding. I love trying out new languages,
      figuring out a new algorithm, solving problems, learning a new framework&mdash;the
      list goes on and on.</p>

    <p>This blog is meant to document my learning. I've been through over 3 years of
      CS classes, an internship, and quite a bit of learning on my own. Honestly,
      I don't feel like I've learned nearly enough. So I've decided to document my progress,
      keep track of projects, and share my experiences. </p>

    <h3 class='mb-2 mt-5'>Hobbies</h3>
    <p>Outside of coding, I have a similar passion for learning. I decided to learn
      how to play guitar during my senior year of high school, mostly because I wanted to play
      the songs I loved to listen to so much. Partly because I wanted to impress a girl.
      Fun fact: it's not the lady magnet people make it out to be. Either that or I'm
      not as good as I think I am.</p>

    <p> I love playing sports. Ever since I was a kid I've been playing baseball,
      basketball, soccer, and really any other sport I can take part in. I played
      for and captained a high school baseball team that was ranked 12th in Minnesota.
      We beat the number two team in a tournament and I pitched a shutout through 7
      in the next game against the number one team. I got pulled in the 8th and we
      ended up losing 1-0. That was a tough loss.</p>

    <p>In the past few years, I've become a pretty die-hard Wild fan. I'd never played
      hockey before this winter&mdash;heck I'd barely even skated&mdash;which is basically a
      sin in Minnesota. This winter I decided I'd done enough watching and wanted
      to go play, so I bought some skates and a stick and went to the park every
      day. Honestly, I'm still not very good but it's a hell of a lot of fun!</p>

    <span style='display:inline-block; width: 30px;'></span> <!-- Tab spacer -->
    <span>- Max</span>
    <div style='display:block; height:30px'></div>
  </div>

@endsection
