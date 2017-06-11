<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>

	</header>
	<main>
		<div class="container">
			<form action="dashboard.php" method="POST"> <!-- возможно перевод на страничку предпросмотра??? -->
				<div class="author_part">
					<label class="app_type">
						<select>
							<option></option> <!-- привязать из php выбор статуса --> 
						</select>
					</label>
					<label class="app_urgency">
						<select>
							<option></option> <!-- привязать из php выбор срочности -->
						</select>
					</label>
					<label class="app_description">
						<textarea></textarea>
					</label>
				</div>
				<div class="material_part">
					<label class="material_part_main">
						<select>
							<option></option>
						</select> <!-- основной материал  -->
					</label>

					<label class="material_part_сonstituent">
						<select>
							<option></option>
						</select> <!-- составляюая основного материала  -->
					</label>
				</div>
				<div class="app_part">
					<label class="app_part_country">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_area">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_region">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_oblast">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_district">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_city">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_spv">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_business_builder">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_tse">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_customer_name">
						<select>
							<option></option>
						</select>
					</label>

					<label class="app_part_address">
						<select>
							<option></option>
						</select>
					</label>
				</div>
				<div class="button">
					<button type="submit">Approve</button> <!-- сохранить и передать на согласование -->
					<button type="submit">Prepare</button> <!-- сохранить, но не передавать на согласование -->
					<button type="????">Preview</button> <!-- предварительный просмотр -->
					<button type="reset">Reset</button> <!-- сбросить все  -->
				</div>
			</form>
		</div>
	</main>
	<footer>

	</footer>
</body>
</html>