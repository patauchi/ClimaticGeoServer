@csrf
<label> Titulo del Proyecto <br>
				<input type="text" name="title" value="{{ old('title', $projectEdit->title) }}">
			</label>
			<br>
			<label> Descripcion del Proyecto <br>
				<textarea name="description">{{old('description', $projectEdit->description) }}</textarea>
			</label>
			<br>
			<label> URl slag <br>
				<input type="text" name="slag" value="{{ old('slag', $projectEdit->slag) }}">
			</label>
			<br>
			<button>{{$btnText}}</button>