<script>
    $(document).ready(function () {
        $('.tm-paging-link').click(function (e) {
            e.preventDefault()

            var page = $(this).text().toLowerCase()
            $('.tm-gallery-page').addClass('hidden')
            $('#tm-gallery-page-' + page).removeClass('hidden')
            $('.tm-paging-link').removeClass('active')
            $(this).addClass("active")
        })
    })
</script>