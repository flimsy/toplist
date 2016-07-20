@extends('layouts.app')

@section('content')

<div class="container" style="padding-top:70px;">
	
	<h2>Submit New Site</h2>

	<div class="col-lg-12">
            <div class="well" style="opacity:.9;">
              <form class="form-horizontal" method="POST" action="{{ url('/submit') }}">
                <fieldset>
                  <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="entry_name" id="entry_name" placeholder="Site Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputUrl" class="col-lg-2 control-label">Link</label>
                    <div class="col-lg-10">
                      <input type="text" name="entry_url" class="form-control" id="entry_url" placeholder="Site Url">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputUrl" class="col-lg-2 control-label">Image (350 x 150)</label>
                    <div class="col-lg-10">
                      <input type="text" name="image_url" class="form-control" id="image_url" placeholder="Image Url (anything other than 350 x 150 will not be displayed!)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" maxlength="250" name="description" rows="3" id="description"></textarea>
                      <span class="help-block">Max length is 250 characters!</span>
                    </div>
                  </div>
         
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Selects</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="Game" id="Game">
                        <option>Runescape</option>
                        <option>Minecraft</option>
                        <option>World of Warcraft</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>

@endsection
