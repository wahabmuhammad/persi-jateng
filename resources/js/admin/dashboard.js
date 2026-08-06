$(document).ready(function() {
    // Load chart data with Fetch API
    fetch('/admin/api/statistics')
        .then(response => response.json())
        .then(data => {
            renderChart(data);
            updateStats(data.stats);
        })
        .catch(error => console.error('Error:', error));

    function renderChart(data) {
        // Chart.js implementation
        const ctx = document.getElementById('visitorChart');
        if(ctx) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.dates,
                    datasets: [{
                        label: 'Pengunjung',
                        data: data.visitors,
                        borderColor: '#1a8b8b',
                        backgroundColor: 'rgba(26, 139, 139, 0.1)'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }
    }

    function updateStats(stats) {
        $('#totalArticles').text(stats.articles);
        $('#totalEvents').text(stats.events);
        $('#totalTrainings').text(stats.trainings);
        $('#totalUsers').text(stats.users);
    }

    // Load recent activities with AJAX
    function loadRecentActivities() {
        $.ajax({
            url: '/admin/api/recent-activities',
            method: 'GET',
            success: function(response) {
                if(response.html) {
                    $('#recentActivities').html(response.html);
                }
            }
        });
    }

    loadRecentActivities();
    // Refresh every 30 seconds
    setInterval(loadRecentActivities, 30000);
}); 