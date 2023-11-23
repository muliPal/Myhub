<!DOCTYPE html>
 <html>
    <head>
        <title>NEW RENTIZE INTERFACE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- 
        Styling the theme panel-->
        <link rel="stylesheet" href="index_new_version.css" />
        
        <script type="module">
            
            //Import the page class from the view module in the outlook folder
            import {page} from "./../../../outlook/v/code/view.js";
            //
            //Create a javsacript  page after this HTML one has loaded into browser
            const Page = new page();
            //
            //Make the javacsript page accessible outside of the scripting module
            window.Page = Page;
            //
            //<Use the page within this HTML as you wish>
        </script>
        
        <script>
            window.onload=()=>{
                let inputDate= document.getElementById("todaydate"); 
                //
                // Create a new Date object with the current date.
                var currentDate = new Date();
                //
                // Format the date as "yyyy-MM-dd"
                let formattedDate =
                  currentDate.getFullYear() +
                  '-' +
                  ('0' + (currentDate.getMonth() + 1)).slice(-2) +
                  '-' +
                  ('0' + currentDate.getDate()).slice(-2);
              inputDate.value = formattedDate;
            };
            
            function show_report_option(show){
                Page.show_panel('layout', show);
                Page.show_panel('filters', show);
                 Page.show_panel('level', show);
            }
            function showoption(){
                //
                //Collect all the user inputs
                const execute = Page.get_checked_value('execute');
                const layout = Page.get_checked_value('layout');
                const level=Page.get_checked_value('level');
                //
                //Get a non-null criteria.....whixh is not correct
                //const criteria = Page.get_input_value('criteria');
                //
                //Get the criteria even of is empty
                
                //
               //Execute the requested function with the collected parameters
              
           }
        </script>
        
        
    </head>
    <body>
        <header>
             <fieldset id="execute">
                <legend>Execute</legend>
                
                <details>
                    <summary>Poster</summary>
                    Display<input type="radio"  name="execute" value="poster.display"  onclick="show_report_option(true)"/>
                    Print<input type="radio" name="execute" value="poster.print"  onclick="show_report_option(true)"/>
                    Email<input type="radio" name="execute" value="poster.email"  onclick="show_report_option(true)"/>
                    Post<input type="radio" name="execute" value="poster.post" onclick="show_report_option(false)"/>
                    Unpost<input type="radio" name="execute" value="poster.unpost" onclick="show_report_option(false)"/>
                </details>
                
                <details open>
                    <summary>Reports</summary>
                    Display<input checked="" type="radio" name="execute" value="report.display"/>
                    Print<input type="radio" name="execute" value="report.print" />
                    Email<input type="radio" name="execute" value="report.email"/>
                    Sms<input type="radio" name="execute" value="report.sms" />
                    Start Date: <input type="date" id="todaydate" />
                </details>    
                </fieldset>
            
            <fieldset id="layout">
                
                <legend>Layout</legend>
                Tabular<input checked="" type="radio" name="layout" value="tabular"/>
                Mutal<input type="radio" name="layout" value="mutal"/>
                
            </fieldset>

            <fieldset id="level">
                <Legend>Level</Legend>
                Detailed<input type="radio" name="level" value="detailed"/>
                Summary<input checked="" type="radio" name="level" value="summary"/>
            </fieldset>

            <fieldset id="filters">
                <legend>Filter By</legend>
                <input type="text" id="criteria" placeholder="Client name"/>
            </fieldset>
            
          <button onclick="showoption()">GO</button>


        </header>
        <article>
              
        </article>
            
    </body> 
</html>
