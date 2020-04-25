<?php
	$name = esc_html__('Name', 'planeta');
	$email = esc_html__('Email', 'planeta');
	$subject = esc_html__('Subject', 'planeta');
	$message = esc_html__('Message', 'planeta');
	$submit = esc_html__('Submit', 'planeta');
?>

<div class='article-container default-container'>
	<form id='section-contact-form'>
		<input type='hidden' name='action' value='contact_send' />

		<p>
			<?php echo $name; ?>
			<input
					required
					type='text'
					name='name'
			/>
		</p>

		<p>
			<?php echo $email; ?>
			<input
					required
					type='email'
					name='email'
			/>
		</p>

		<p>
			<?php echo $subject; ?>
			<input
					required
					type='text'
					name='subject'
			/>
		</p>

		<p>
			<?php echo $message; ?>
			<textarea
					required
					rows='10'
					name='message'>
			</textarea>
		</p>

		<p>
			<?php echo $submit; ?>
			<input
					type='submit'
					value='<?php echo $submit; ?>'
			/>
		</p>
	</form>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		<?php
			$sending = esc_html__('Sending...', 'planeta');
			$sent = esc_html__('Message sent!', 'planeta');
			$error_sending = esc_html__('Error sending message!', 'planeta');
		?>
    var is_sending = false
		var submitButton = $('#section-contact-form input[type="submit"]')

		$('#section-contact-form').submit(function(e)
		{
      if(is_sending) { return false }
      e.preventDefault()
      var $this = $(this)

      $.ajax({
        url: '<?php echo admin_url('admin-ajax.php') ?>',
        type: 'POST',
        dataType: 'JSON',
        data: $this.serialize(),
        beforeSend: function () {
          is_sending = true
					submitButton.attr('value', '<?php echo $sending; ?>')
					submitButton.css('pointer-events', 'none')
					submitButton.attr('disabled', true)
        },
        error: handleFormError,
        success: function (data) {
          if (data.status === 'success') {
						submitButton.attr('value', '<?php echo $sent; ?>')
          } else {
            handleFormError()
          }
        }
      })
    })

		function handleFormError()
		{
			is_sending = false
			submitButton.value('<?php echo $error_sending; ?>')
		}
  })
</script>
