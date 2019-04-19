@extends('layouts.master')
@section('content')

    <center><h1 class="entry-title">Frequently Asked Questions</h1></center>
<div class="container " style="padding-top:50px;padding-bottom:300px;">
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is EasyMealz?</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>EasyMealz is a platform which has redefined the food industry. It is a one stop arena where food lovers can come together ,experiment and reinvent the conventional dishes by sharing their innovative recipes.
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is the USP of EasyMealz?</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Often we are left wondering how to make use of the available ingredients we have ,in a non-conventional.EasyMealz provides solutions to these questions.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Do you provide information about the nutritional values of the recipes posted here ?</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Yes, EasyMealz takes particular interest in calculating the nutritional value of all the recipes.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Where can I get some?</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How many times we make each recipe?</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>We feel a big responsibility to providing really good quality recipes for our readers, so We almost always make a recipe at least twice to make sure I’ve got it just how we want it. The first time we make it, we focus on developing the recipe – flavors, ingredient combinations, cooking time, etc. The second time, we focus on recipe tweaks (like a little more spice, a little less salt) and taking photos. Every once in a while, a recipe takes MANY attempts before being ready to post, like these cookie brownies. But we definitely weren’t complaining about that one. At the end of the day we want to provide our readeres the best recipe, that makes them happy. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How do you choose your products?</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>We'll be honest: we really like all of the recipes featured in the website. If we want something for our own homes, that's when we know we should pass it on to you, because a great find only gets better when it's shared. In the website you’ll find a range of high-quality recipes. Our team scours the Internet, blogs and magazines to find the best products, and works to carefully design the recipes. And above all, we choose products that worth using. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How do I ask a question about a recipe?</a>
              </h4>

            </div>
            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Click on "Contact Us," and soon you'll have some answers to your question from our community. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What if I see a plagiarized recipe on the site?</a>
              </h4>

            </div>
            <div id="question7" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>Tell us! We all have a vested interest in the content on the site being original. Please email us at admin@easyMealz.com if you notice something that feels a bit off.</p>
                </div>
            </div>
        </div>

    </div>
    <!--/panel-group-->
</div>
@endsection
