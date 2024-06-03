document.addEventListener('DOMContentLoaded', function () {
    const deleteLinks = document.querySelectorAll('a.delete');

    deleteLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            if (!confirm('Are you sure you want to delete this post?')) {
                e.preventDefault();
            }
        });
    });
});
