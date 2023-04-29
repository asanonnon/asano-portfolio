<?php get_header(); ?>

    <main>
        
        <div class="contact-title">
            <div class="title">
                CONTACT
            </div>
        </div>


        <div class="contact-form">
            <div class="form">

                <div class="contact contact-name">
                    <div class="name contact-name">name</div>
                    <div class="name-form input">
                        <i class="fa-solid fa-user"></i>
                        <input type="text">
                    </div>    
                </div>

                <div class="contact contact-mail">
                    <div class="mail contact-name">mail</div>
                    <div class="mail-form">
                        <div class="mail-form input">
                            <i class="fa-regular fa-envelope-open"></i>
                            <input type="text">
                        </div>
                    </div>
                </div>

                <div class="contact contact-message">
                    <div class="message contact-name">message</div>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="submit">
                    <input  type="button" value="submit">
                </div>

            </div>

        </div>
        

    </main>


<?php get_footer();?>