<?php
/**
 * MCQ Plugin UI template.
 */
?>

<div class="smpp-dropdown-group">
    <select id="smpp-medium" required>
        <option value="" selected disabled hidden>Select Medium</option>
    </select>

    <select id="smpp-semester" required>
        <option value="" selected disabled hidden>Select Semester</option>
    </select>

    <select id="smpp-subject" required>
        <option value="" selected disabled hidden>Select Subject</option>
    </select>

    <select id="smpp-chapter" required>
        <option value="" selected disabled hidden>Select Chapter</option>
    </select>

    <select id="smpp-topic" required>
        <option value="" selected disabled hidden>Select Topic</option>
    </select>
</div>

<script>
(function() {
    const mediumList = ['Bangla', 'English'];
    const mediumSelect = document.getElementById('smpp-medium');

    mediumList.forEach((m) => {
        const opt = document.createElement('option');
        opt.value = m;
        opt.textContent = m;
        mediumSelect.appendChild(opt);
    });
})();
</script>
