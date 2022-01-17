<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>


<main class="about-us-page inner-page faq">
    <section class="">
        <div class="section-rule">
            <h1 class="section__title text-center">Frequently Asked Questions</h1>
            <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            
                            <a  data-toggle="collapse" href="#collapseOne" class="collapsed">
                            Solutions you would like to get about the questions ? <span class="hide">+</span><span class="minus">-</span>
                            </a>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor non etiam in maecenas rhoncus. Nisl, egestas lobortis lorem at massa. Vulputate imperdiet et natoque gravida eu. In duis eget erat condimentum vitae eu nec. Nunc, diam sollicitudin in erat tortor pulvinar enim porta molestie. Felis, varius dolor cras mi tempus magna nullam. Mauris enim ipsum sed tortor viverra vel nulla felis magna. Massa amet at cursus morbi. A mattis dignissim eleifend lorem nulla ac est, venenatis amet. Integer nullam tincidunt nullam cursus eu, eu vestibulum diam tincidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            
                            <a  data-toggle="collapse" href="#collapseTwo" class="collapsed">
                            Solutions you would like to get about the questions ?<span class="hide">+</span><span class="minus">-</span>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor non etiam in maecenas rhoncus. Nisl, egestas lobortis lorem at massa. Vulputate imperdiet et natoque gravida eu. In duis eget erat condimentum vitae eu nec. Nunc, diam sollicitudin in erat tortor pulvinar enim porta molestie. Felis, varius dolor cras mi tempus magna nullam. Mauris enim ipsum sed tortor viverra vel nulla felis magna. Massa amet at cursus morbi. A mattis dignissim eleifend lorem nulla ac est, venenatis amet. Integer nullam tincidunt nullam cursus eu, eu vestibulum diam tincidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            
                            <a  data-toggle="collapse"  class="collapsed" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Solutions you would like to get about the questions ? <span class="hide">+</span><span class="minus">-</span>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor non etiam in maecenas rhoncus. Nisl, egestas lobortis lorem at massa. Vulputate imperdiet et natoque gravida eu. In duis eget erat condimentum vitae eu nec. Nunc, diam sollicitudin in erat tortor pulvinar enim porta molestie. Felis, varius dolor cras mi tempus magna nullam. Mauris enim ipsum sed tortor viverra vel nulla felis magna. Massa amet at cursus morbi. A mattis dignissim eleifend lorem nulla ac est, venenatis amet. Integer nullam tincidunt nullam cursus eu, eu vestibulum diam tincidunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

</main>
<style>
.join, footer{
    display: none;
}
</style>    
<?php
include 'footer.php';
?>
<script>
    
</script> 
</body>
</html>