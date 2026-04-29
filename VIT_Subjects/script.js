$(function () {
  const $impactScore = $('#impactScore');
  const $wrapper = $('#pillWrapper');
  const $toggleModeBtn = $('#toggleModeBtn');

  function animateValue(targetValue) {
    $({ value: parseInt($impactScore.text(), 10) || 0 }).animate(
      { value: targetValue },
      {
        duration: 450,
        easing: 'swing',
        step: function () {
          $impactScore.text(Math.round(this.value) + '%');
        },
        complete: function () {
          $impactScore.text(targetValue + '%');
        }
      }
    );
  }

  function updateProgress($panel) {
    $('.progress-bar').css('width', '0%');
    const $bar = $panel.find('.progress-bar');
    const target = Number($bar.data('progress')) || 0;
    setTimeout(function () {
      $bar.css('width', target + '%');
    }, 80);
  }

  function handleActiveTab($tab) {
    const score = Number($tab.data('score')) || 0;
    animateValue(score);

    const targetSelector = $tab.attr('data-bs-target');
    const $targetPanel = $(targetSelector);
    if ($targetPanel.length) {
      updateProgress($targetPanel);
    }
  }

  $('#vit-pills button[data-bs-toggle="pill"]').on('shown.bs.tab', function (event) {
    handleActiveTab($(event.target));
  });

  $toggleModeBtn.on('click', function () {
    $wrapper.toggleClass('vertical-mode');
    const isVertical = $wrapper.hasClass('vertical-mode');
    $(this).text(isVertical ? 'Switch to Horizontal Pills' : 'Switch to Vertical Pills');
  });

  handleActiveTab($('#vit-pills .nav-link.active'));
});