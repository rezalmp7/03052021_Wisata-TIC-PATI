// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Wisata Alam", "Wisata Edukasi", "Desa Wisata", "Wisata Sejarah", "Wisata Buatan", "Wisata Reiligi", "Wisata Kerajinan", "Wisata Budaya", "Wisata Belanja dan Kuliner", "Wisata Industri"],
    datasets: [{
      data: [55, 30, 15, 20, 15, 30, 5, 1, 4, 19],
      backgroundColor: ['#C81C1C', '#C87A1C', '#BEC81C', '#6BC81C', '#1CC85F', '#1CC8C2', '#1C83C8', '#1C30C8', '#661CC8', '#BB1CC8'],
      hoverBackgroundColor: ['#6E1515', '#694214', '#646911', '#2C500E', '#0D5B2B', '#0B504D', '#0D3D5D', '#0E1757', '#270C4A', '#570C5D'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
