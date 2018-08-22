@extends('main')

@section('title', '| Contact')


@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Contact Me</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <form>
          <div class="form-group">
            <label name="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label name="subject">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <label name="message">Message</label>
            <textarea class="form-control" id="Message" placeholder="type your message here . . . "></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>

  </div> <!-- /container -->

@endsection
