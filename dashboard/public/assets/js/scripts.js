const ctx = document.getElementById("ventasChart").getContext("2d");

const ventasChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
        datasets: [
            {
                label: "Ventas",
                data: [17000, 21200, 18500, 24000, 23500, 24200, 12000],
                backgroundColor: "rgba(33, 74, 255, 0.2)",
                borderColor: "#214aff",
                borderWidth: 3,
                tension: 0.3,
                pointBackgroundColor: "#214aff",
                pointBorderColor: "#1a38c0",
                pointRadius: 5,
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: "#fff",
                    font: { size: 14 },
                },
            },
            tooltip: {
                backgroundColor: "#2e2e2e",
                titleColor: "#fff",
                bodyColor: "#fff",
            },
        },
        scales: {
            x: {
                ticks: { color: "#fff" },
                grid: { color: "rgba(255,255,255,0.1)" },
            },
            y: {
                ticks: { color: "#fff" },
                grid: { color: "rgba(255,255,255,0.1)" },
            },
        },
    },
});

document.querySelector(".hamburger").addEventListener("click", function () {
    document.querySelector(".sidebar").classList.toggle("active");
    this.classList.toggle("active");
});
