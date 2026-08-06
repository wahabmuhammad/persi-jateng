$(document).ready(function() {
    // Delete article with AJAX
    $('.delete-article').click(function() {
        const id = $(this).data('id');
        $('#deleteId').val(id);
        $('#deleteModal').modal('show');
    });

    $('#confirmDelete').click(function() {
        const id = $('#deleteId').val();
        $.ajax({
            url: `/admin/articles/${id}`,
            method: 'DELETE',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if(response.success) {
                    location.reload();
                } else {
                    alert('Gagal menghapus data');
                }
            },
            error: function() {
                alert('Terjadi kesalahan');
            }
        });
    });

    // Bulk delete
    $('#bulkDelete').click(function() {
        const selected = [];
        $('.article-checkbox:checked').each(function() {
            selected.push($(this).val());
        });
        
        if(selected.length === 0) {
            alert('Pilih minimal satu berita');
            return;
        }

        if(confirm(`Hapus ${selected.length} berita terpilih?`)) {
            $.ajax({
                url: "{{ route('admin.articles.bulk-delete') }}",
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    ids: selected
                },
                success: function(response) {
                    if(response.success) {
                        location.reload();
                    }
                }
            });
        }
    });

    // Search with debounce
    let searchTimeout;
    $('#searchInput').on('keyup', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(function() {
            const query = $('#searchInput').val();
            $.ajax({
                url: "{{ route('admin.articles.search') }}",
                method: 'GET',
                data: { q: query },
                success: function(response) {
                    if(response.html) {
                        $('#articlesTable tbody').html(response.html);
                    }
                }
            });
        }, 300);
    });
});