set theme=kkfoundation
robocopy "C:\Users\JohnCampbell\OneDrive - The Childress Agency, Inc\ChildressAgency\%theme%\wp-theme-files" "C:\Users\JohnCampbell\OneDrive - The Childress Agency, Inc\ChildressAgency\local_sites\%theme%\app\public\wp-content\themes\%theme%" /MIR /XO /LOG:"C:\Users\JohnCampbell\OneDrive - The Childress Agency, Inc\ChildressAgency\%theme%\sync.log"
timeout /t 3