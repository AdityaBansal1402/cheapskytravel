<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>
	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}

		[data-bs-theme=dark] {
			color-scheme: dark;
			--bs-body-color: #dee2e6;
			--bs-body-color-rgb: 222, 226, 230;
			--bs-body-bg: #212529;
			--bs-body-bg-rgb: 33, 37, 41;
			--bs-emphasis-color: #fff;
			--bs-emphasis-color-rgb: 255, 255, 255;
			--bs-secondary-color: rgba(222, 226, 230, 0.75);
			--bs-secondary-color-rgb: 222, 226, 230;
			--bs-secondary-bg: #343a40;
			--bs-secondary-bg-rgb: 52, 58, 64;
			--bs-tertiary-color: rgba(222, 226, 230, 0.5);
			--bs-tertiary-color-rgb: 222, 226, 230;
			--bs-tertiary-bg: #2b3035;
			--bs-tertiary-bg-rgb: 43, 48, 53;
			--bs-primary-text-emphasis: #6ea8fe;
			--bs-secondary-text-emphasis: #a7acb1;
			--bs-success-text-emphasis: #75b798;
			--bs-info-text-emphasis: #6edff6;
			--bs-warning-text-emphasis: #ffda6a;
			--bs-danger-text-emphasis: #ea868f;
			--bs-light-text-emphasis: #f8f9fa;
			--bs-dark-text-emphasis: #dee2e6;
			--bs-primary-bg-subtle: #031633;
			--bs-secondary-bg-subtle: #161719;
			--bs-success-bg-subtle: #051b11;
			--bs-info-bg-subtle: #032830;
			--bs-warning-bg-subtle: #332701;
			--bs-danger-bg-subtle: #2c0b0e;
			--bs-light-bg-subtle: #343a40;
			--bs-dark-bg-subtle: #1a1d20;
			--bs-primary-border-subtle: #084298;
			--bs-secondary-border-subtle: #41464b;
			--bs-success-border-subtle: #0f5132;
			--bs-info-border-subtle: #087990;
			--bs-warning-border-subtle: #997404;
			--bs-danger-border-subtle: #842029;
			--bs-light-border-subtle: #495057;
			--bs-dark-border-subtle: #343a40;
			--bs-heading-color: inherit;
			--bs-link-color: #6ea8fe;
			--bs-link-hover-color: #8bb9fe;
			--bs-link-color-rgb: 110, 168, 254;
			--bs-link-hover-color-rgb: 139, 185, 254;
			--bs-code-color: #e685b5;
			--bs-border-color: #495057;
			--bs-border-color-translucent: rgba(255, 255, 255, 0.15);
			--bs-form-valid-color: #75b798;
			--bs-form-valid-border-color: #75b798;
			--bs-form-invalid-color: #ea868f;
			--bs-form-invalid-border-color: #ea868f;
		}

		.text-body-secondary {
			--bs-text-opacity: 1;
			color: var(--bs-secondary-color) !important;
		}

		p {
			margin: 12px 15px 12px 15px;
		}
		.margin {
			margin: 0 10px 0 0;
			width: 50%;
			padding: 1em;
			background: #fff;
			border-radius: 1em;
		}
	</style>
</head>

<body>
	<div id="container">
		<h1>
			<?php echo $heading; ?>
		</h1>
		<?php echo $message; ?>
		<div class="margin">
			<svg id="i-chevron-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="10" height="10"
				fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
				<path d="M20 30 L8 16 20 2" />
			</svg><a class="text-body-secondary link" href="<?php echo "../"; ?>">Back to Home</a>
		</div>
	</div>
</body>

</html>