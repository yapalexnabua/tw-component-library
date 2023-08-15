document.querySelectorAll('.slider-a .swiper-filter').forEach((el) => {
    el.addEventListener('click', async (e) => {
        e.preventDefault();

        alert('Coming soon');
        // const container = this.closest('.slider-a'),
        //     filter = this.getAttribute('data-filter'),
        //     endpoint = container.getAttribute('data-filters-endpoint') || '/api/sliders/filters';
        
        // const response = await axios.get(endpoint);

        // container.find()
    });
});