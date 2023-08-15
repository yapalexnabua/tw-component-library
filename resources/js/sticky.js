const elements = document.querySelectorAll('.sticky')
const observer = new IntersectionObserver( 
  (entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-pinned')
        } else {
            entry.target.classList.remove('is-pinned')
        }
    })
  },
);

elements.forEach((el) => {
    observer.observe(el);
});