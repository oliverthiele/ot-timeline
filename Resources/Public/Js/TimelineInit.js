// Initialises every timeline of the ot_timeline content element.
// timeline() reads its options from the data-* attributes of each element.
(() => {
  const initTimelines = () => {
    const otTimeline = document.querySelectorAll('[data-js="otTimeline"]');
    if (otTimeline.length === 0) {
      return;
    }
    timeline(otTimeline);
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTimelines);
  } else {
    initTimelines();
  }
})();
