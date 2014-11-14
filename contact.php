<?php include 'templates/headerTemplate.php'; ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<div id="form-container">
    <form role="form" method="post" id="contact-form" enctype="text/plain">
        <div class="form-group">
            <label for="name">Let me know who you are</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">What email can I reply to?</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="phone">What number can I contact you with</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="message">Tell me what you need</label>
            <textarea style="resize:none;" class="form-control" name="message" id="message" placeholder="Enter your message here!"></textarea>
        </div>
        <div class="form-group">
            <label for="times">What times would be a good time for me to respond?</label>
            </select>
            <div id="times">
                <input type="checkbox" name="option[]" value="monday"> Monday
                <input type="checkbox" name="option[]" value="tuesday"> Tuesday
                <input type="checkbox" name="option[]" value="wednesday">Wednesday
                <input type="checkbox" name="option[]" value="thursday">Thursday
                <input type="checkbox" name="option[]" value="friday"> Friday
                <input type="checkbox" name="option[]" value="saturday">Saturday
                <input type="checkbox" name="option[]" value="sunday"> Sunday
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" id="submit" value="Send">
        </div>
    </form>
</div>
<?php include 'templates/footerTemplate.php'; ?>
</div>
<script>
    
    $(function () {
        
        $('#contact-form').submit(function () {
            var patt_email = /^[A-Za-z0-9_\.]+@[A-Za-z0-9]+\.(a-z){1,5}$/;
            var patt_phone = /^[0-9]{10}$/;
            
            var user_name = $('#name').val();
            
            var user_phone = $('#phone').val();
            if (!patt_phone.test(user_phone)){
                return false;
            }
            
            var user_email = $('#email').val();
            if (!patt_email.test(user_email)){
                return false;
            }
            
            var checked = [];
            $("input[name='options[]']:checked").each(function(){
               checked.push($(this).val()); 
            });
        });
    });
    
</script>
</body>

</html>
