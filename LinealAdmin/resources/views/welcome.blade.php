<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
  }
  .gpd-header{
    margin:0;
  }
  #iuzkf{
    display:none;
  }
  #ivauf{
    display:none;
  }
  #i5un{
    background-image:linear-gradient(rgba(27,20,45,0.82),rgba(27,20,45,0.82)), url('https://images.unsplash.com/photo-1476445704028-a36e0c798192?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjcwNXwwfDF8c2VhcmNofDE1fHxkaWdpdGFsfGVufDB8fHw&ixlib=rb-1.2.1&q=80&w=1080');
    background-repeat:repeat, no-repeat;
    background-position:left top, center center;
    background-attachment:scroll, scroll;
    background-size:auto, cover;
    height:50vh;
    padding:10px 0 10px 0;
  }
  #ipls{
    height:75%;
    align-items:center;
  }
  #iqkg{
    margin:0 0 0 0;
    color:#cebacf;
    font-size:3rem;
  }
  #i5hl{
    text-align:center;
    color:#ffffff;
  }
  body{
    background-color:#2b2d42;
  }
  #ia1v{
    background-color:#7d80da;
    text-align:center;
    padding:60px 60px 60px 60px;
    color:#ffffff;
    font-size:1.2rem;
    font-weight:300;
    letter-spacing:1px;
    line-height:30px;
    margin:-25vh auto 0 auto;
    max-width:730px;
    border-radius:5px 5px 5px 5px;
    box-shadow:0 5px 35px 0 rgba(0,0,0,0.35);
  }
  #iwpky{
    margin:0 0 19.92px 0;
    font-size:30px;
    text-transform:uppercase;
  }
  #ialh{
    padding:0 0 0 0;
  }
  #iactu{
    background-color:#cebacf;
    text-align:center;
    padding:60px 60px 60px 60px;
    color:#2b2d42;
    font-size:1.2rem;
    font-weight:300;
    letter-spacing:1px;
    line-height:30px;
    max-width:730px;
    border-radius:5px 5px 5px 5px;
    box-shadow:0 5px 35px 0 rgba(0,0,0,0.35);
  }
  #iuzkf{
    display:none;
  }
  #ivauf{
    display:none;
  }
  #ik4dw{
    max-width:390px;
    margin:0 auto 19.2px auto;
  }
  .gpd-header{
    margin:0;
  }
  #iang8{
    display:none;
  }
  #irt13{
    display:none;
  }
  #iyzvq{
    display:none;
  }
  #itccb{
    display:none;
  }
  #ii2qd{
    font-weight:500;
  }
  #i1i8t{
    font-size:13.2px;
    position:relative;
    right:45%;
  }
  @media (max-width: 375px){
    #ia1v{
      padding:30px 15px 30px 15px;
    }
    #iactu{
      padding:30px 15px 30px 15px;
    }
    #iwpky{
      font-size:20px;
    }
    #i5un{
      background-image:linear-gradient(rgba(27,20,45,0.81),rgba(27,20,45,0.81));
      background-repeat:repeat;
      background-position:left top;
      background-attachment:scroll;
      background-size:auto;
    }
  }
  
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <section id="i5un" class="gpd-section">
  <div id="ialh" class="gpd-container">
    <div id="ipls" data-anim-type="fadeIn" data-anim-br="414" class="gdp-row">
      <div id="i5hl" class="cell">
        <h1 id="iqkg" class="gpd-header">Lineal Admin Manager
          <br>
        </h1>
      </div>
    </div>
  </div>
</section>
<section id="iz0i" class="gpd-section">
  <div id="ia1v" data-anim-type="fadeInUp" data-anim-br="414" class="gpd-container">
    <h2 id="iwpky" class="gpd-header">add new
      <br>
    </h2>
    <form method="post" class="form">
      <input type="text" placeholder="First name" name="firstname" class="input"/>
      <div class="form-group">
        <label class="label">Name</label>
      </div>
      <input type="text" placeholder="Last name" name="lastname" class="input"/>
      <div class="form-group">
        <label class="label">Email</label>
        <input type="email" placeholder="Email" name="email" class="input"/>
      </div>
      <div class="form-group">
        <label class="label">Options</label>
        <input type="number" placeholder="Phone number" name="phone" class="input"/>
      </div>
      <div class="form-group">
        <button type="submit" class="button">Send</button>
      </div>
    </form>
  </div>
</section>
<section id="irzqg" class="gpd-section">
  <div id="iactu" data-anim-type="fadeIn" data-anim-br="414" class="gpd-container">
    <form method="post" class="form">
      <div class="form-group">
        <label class="label" id="ii2qd">Delete Admin<br></label>
      </div>
      <div class="form-group">
        <label class="label" id="i1i8t">Select<br></label>
        <select type="text" name="Select" class="select"><option value="1">Option 1</option><option value="2">Option 2</option><option value="3">Option 3</option></select>
      </div>
      <div class="form-group">
      </div>
      <div class="form-group">
        <button type="submit" class="button">Send</button>
      </div>
      <div data-form-state="success" class="state-success" id="iyzvq">Thanks! We received your request
      </div>
      <div data-form-state="error" class="state-error" id="itccb">An error occurred on processing your request, try again!
      </div>
      <div>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
    
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <th scope="row">Default</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">Primary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">Secondary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-success">
      <th scope="row">Success</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-danger">
      <th scope="row">Danger</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-warning">
      <th scope="row">Warning</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-info">
      <th scope="row">Info</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-light">
      <th scope="row">Light</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table>
      </div>
    </form>
    <form method="post" data-redirect="" id="ik4dw">
      <div data-form-state="success" id="iuzkf" class="state-success">Thanks! We received your request
      </div>
      <div data-form-state="error" id="ivauf" class="state-error">An error occurred on processing your request, try again!
      </div>
    </form>
  </div>
</section>
    </body>
</html>