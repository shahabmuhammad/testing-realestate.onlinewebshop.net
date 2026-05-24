<div class="counter-section_" id="counterSection">
      <div class="counter-item_">
        <h2 class="counter_" data-target="6">0</h2>
                <p_>Unique Blocks Categories</p_>
      </div>
      <div class="counter-item_">
                <h2 class="counter_" data-target="73">0</h2>
                <p_>Unique Plots</p_>
      </div>
      <div class="counter-item_">
                <h2 class="counter_" data-target="100" data-suffix="%">0</h2>
                <p_>Highrise</p_>
      </div>
    </div>

    <script>
      const counterSection = document.getElementById("counterSection");
const counters = document.querySelectorAll(".counter_");

const animateCounters = () => {
    counters.forEach((counter) => {
        counter.textContent = "0";

const updateCounter = () => {
    const target = parseFloat(counter.getAttribute("data-target"));
    const suffix = counter.getAttribute("data-suffix") || "";
    const current = parseFloat(counter.textContent) || 0;

    const increment = target / 50;

    if (current < target) {
        let next = current + increment;

        if (next > target) {
            next = target;
        }

        const displayedValue = target % 1 !== 0
            ? next.toFixed(1)
            : Math.ceil(next);

        counter.textContent = `${displayedValue}${suffix}`;

        requestAnimationFrame(updateCounter);
    } else {
        const finalValue = target % 1 !== 0 ? target.toFixed(1) : target;
        counter.textContent = `${finalValue}${suffix}`;
    }
};

        updateCounter();
    });
};

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                counterSection.classList.add("visible_");
                animateCounters();
                observer.unobserve(counterSection); // Stop observing after animation
            }
        });
    },
    { threshold: 0.5 } // Trigger when 50% of the section is visible
);

observer.observe(counterSection);
    </script>