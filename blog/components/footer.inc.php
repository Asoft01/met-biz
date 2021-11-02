<footer class="footer">
    <p class="text-center">&copy; Metropolitian School of Business and Management 2020</p>
</footer>
<!-- <div class="cursor"></div> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo ROOT_DIR; ?>js/jquery.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo ROOT_DIR ?>js/tinymce4.2.5/tinymce.min.js"></script>
<script src="<?php echo ROOT_DIR; ?>js/script.js"></script>

<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern imagetools"
        ],

        menubar: false, // Disables the File, Edit, View etc menu

        font_formats: 'Sans Serif=sans-serif;Arial=arial,sans-serif,helvetica;Courier New=courier new,courier,monospace',
        fontsize_formats: '6px 7px 8px 9px 10px 11px 12px 13px 14px 16px 18px 24px 36px',
        forced_root_block: false, // Use <br> instead of <p> for new lines

        //toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist",
        toolbar1: "bold italic underline | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist",


        //moxiemanager_rootpath: '/uploads/user1', // Configure custom path for users
        relative_urls: false,
        remove_script_host: false
    });
</script>