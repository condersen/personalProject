<?php include 'templates/headerTemplate.php';?>
<div id="form-container">
    <form role="form">
        <div class="form-group">
            <label for="name">Let me know who you are</label>
            <input type="" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">What email can I reply to?</label>
            <input type="" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="phone">What number can I contact you with?</label>
            <input type="" class="form-control" id="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="message">Tell me what you need</label>
            <textarea style="resize:none;"type="" class="form-control" id="message" placeholder="Enter your message here!"></textarea>
        </div>
        <div class="form-group">
            <label for="times">What times would be a good time for me to respond?</label>
            <div id="times">
                <input type="checkbox" name="option1" value="monday"> Monday
                <input type="checkbox" name="option2" value="tuesday"> Tuesday
                <input type="checkbox" name="option3" value="wednesday"> Wednesday
                <input type="checkbox" name="option4" value="thursday"> Thursday
                <input type="checkbox" name="option5" value="friday"> Friday
                <input type="checkbox" name="option6" value="saturday"> Saturday
                <input type="checkbox" name="option7" value="sunday"> Sunday
            </div>
        </div>
        <div class="form-group">
            <input type="button" class="btn btn-primary" id="submit" value="Send">
        </div>
    </form>
</div>
<?php include 'templates/footerTemplate.php';?>