function updateSlotStatus(slotId) {
    var slotElement = $('[data-slot-id="' + slotId + '"]');
    var status = slotElement.data('slot-status') == 'free' ? 'taken' : 'free';
    var csrfToken = '<?= csrf_hash() ?>';
    
    // Send AJAX request to update slot status
    $.ajax({
        url: "<?php echo base_url('public/Parking/updateSlotStatus') ?>",
        type: 'POST',
        dataType: 'json',
        data: {
            id: slotId,
            status: status,
            <?= csrf_token() ?>: csrfToken
        },
        success: function(response) {
            // Update button color and data-slot-status attribute
            slotElement.removeClass('free taken');
            slotElement.addClass(response.status);
            slotElement.data('slot-status', response.status);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}