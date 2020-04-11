@extends('layouts.app',['title'=>'BJJPlymouth | Timetable | Students | Adults | Kids'])
@section('content')
<section class="timetable-wrap">
    <div class="timetable-wrap_container">
      <h1 class="t-title">Timetable</h1>
      <div class="container_t">
        <div class="day-card">
          <div class="day-card_name">Monday</div>
          <div class="day-card_times">
            <div class="day-time">
              <p>10:00 - 11:00</p>
              <p class="className mx">Mixed Level (GI)</p>
            </div>
            <div class="day-time">
              <p>17:15 - 18:00</p>
              <p class="className kids">Kids (GI)</p>
            </div>
            <div class="day-time">
              <p>18:00 - 19:00</p>
              <p class="className bja">Beginners, Juniors & Adults (GI)</p>
            </div>
            <div class="day-time">
              <p>19:00 - 19:30</p>
              <p class="className  open">Open Mat</p>
            </div>
          </div>
        </div>
        <div class="day-card">
          <div class="day-card_name">Tuesday</div>
          <div class="day-card_times">
            <div class="day-time">
              <p>18:30 - 19:30</p>
              <p class="className nogi">
                Driling Class GI/NoGI <br />
                Mixed Level
              </p>
            </div>
            <div class="day-time">
              <p>19:00 - 19:30</p>
              <p class="className  mx">Competition Class (GI)</p>
            </div>
          </div>
        </div>
        <div class="day-card">
          <div class="day-card_name">Wednesday</div>
          <div class="day-card_times">
            <div class="day-time">
              <p>10:00 - 11:00</p>
              <p class="className mx">Mixed Level (GI)</p>
            </div>
          </div>
        </div>
        <div class="day-card">
          <div class="day-card_name">Thursday</div>
          <div class="day-card_times">
            <div class="day-time">
              <p>18:30 - 19:30</p>
              <p class="className bja">Beginners, Juniors & Adults (GI)</p>
            </div>
            <div class="day-time">
              <p>19:30 - 20:30</p>
              <p class="className  mx">Competition Class (GI)</p>
            </div>
          </div>
        </div>
        <div class="day-card">
          <div class="day-card_name">Friday</div>
          <div class="day-card_times">
            <div class="day-time">
              <p>10:00 - 11:00</p>
              <p class="className mx">Mixed Level (GI)</p>
            </div>
          </div>
        </div>
        <div class="day-card">
          <div class="day-card_name">Saturday</div>
          <div class="day-card_times">
            <div class="day-time">
              <p>12:15 - 13:00</p>
              <p class="className kids">Kids (GI)</p>
            </div>
            <div class="day-time">
              <p>13:00 - 14:00</p>
              <p class="className nogi">NoGI mixed Level</p>
            </div>
            <div class="day-time">
              <p>14:00 - 15:00</p>
              <p class="className mx">Mixed Level Juniors & Adults (GI)</p>
            </div>
          </div>
        </div>
      </div>
      <h1 class="t-title">Class Information</h1>
      <div class="container_info">
        <div class="info-card info-card-big">
          <div class="info-card_title c-private">Private Sessions</div>
          <div class="info-card_desc">
            <p>
              Lead Coaches Ian and Amy are also available for 1:1 sessions or 2:1
              sessions, these would be outside class times and would depend on
              availability. 1:1 sessions allows complete private tuition between
              you and your coach allowing you to work on what you want to. These
              are ideal for personalised progression, honing technique, game
              planning or gaining more confidence. 2:1 sessions are a great way to
              get more private tuition but at a lower cost and with a friend to
              train with. You can choose between you what you want to work on. If
              you would like the 2:1 sessions but don’t have anyone to join you
              please contact me and we can discuss options it is likely that your
              not the only one and we can pair you up.
            </p>
            <div class="desc-img">
              <img src="" alt="">
            </div>
          </div>
        </div>
        <div class="info-card info-card-med">
          <div class="info-card_title c-beginner">
            Beginners, Juniors & Adults
          </div>
          <div class="info-card_desc">
            <p>
              In this class students will be taught movements and drills that will
              prepare them for the Mixed Level classes. There will be specific
              training at the end of every session, this will give students time
              to practice what they have learnt in the lesson with a live partner.
              These classes are open to adults (age 16+) and juniors (age 12-15).
              Adults and Juniors will be separated slightly by only training with
              those in the same age bracket, this is to allow everyone to benefit
              and get the most out of their training (exemptions may be made
              dependant on specific circumstances).
            </p>
          </div>
        </div>
        <div class="info-card info-card-small">
          <div class="info-card_title c-kids ">Kids</div>
          <div class="info-card_desc">
            <p>
              Kids Gi class suitable for children age between 7 and 11. We teach
              BJJ, so the kids will be learning the same type of things as the
              adults but in a way more suited to the age. There will be a mixture
              of drilling technique, specific training and sparring. We aim to
              make the classes enjoyable and fun whilst progressing in Brazilian
              Jiu Jitsu. We cater for all interests from those who want to compete
              to those who just want to come and have fun.
            </p>
          </div>
        </div>
        <div class="info-card">
          <div class="info-card_title c-mix">Mixed Levels</div>
          <div class="info-card_desc">
            <p>
              Mixed Level Gi class is where the instructor will go more in-depth
              into technique, covering different scenarios and concepts. there
              will be specific training and sparring in these sessions. This class
              is only suitable for those above the age of 16.
            </p>
          </div>
        </div>
        <div class="info-card">
          <div class="info-card_title c-nogi">Drilling Gi/NoGi Mixed Level</div>
          <div class="info-card_desc">
            <p>
              Drilling class is where you get to work through your own personal
              drills. Maybe you have a competition coming up and you want to work
              on your game or there’s techniques you need/want to perfect. The
              coach will be at hand to help, for you to ask questions or to
              provide you with something to work on. This class is only suitable
              for those above the age of 16.
            </p>
          </div>
        </div>
        <div class="info-card">
          <div class="info-card_title c-open">Open Mat</div>
          <div class="info-card_desc">
            <p>
              This is an open mat session open to all members to come to, this
              isn’t a taught session and therefore there is no cost to this for
              paying members of the club. This is an opportunity to come and work
              through what you have learnt in previous sessions, drill or roll.
              Although not always, an instructor is usually there for you to ask
              questions or advice regarding you game.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection