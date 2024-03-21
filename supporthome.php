<?php
include('register dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
             <meta http-equiv="x-ua-compatible" content="IE=edge">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <title>support centre Dashboard</title>
             <link rel="stylesheet" type="text/css" href="new support.css" >
             <!-- Latest compiled and minified CSS -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous"
  />

  <!-- Optional theme -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous"
  />

  <!-- Latest compiled and minified JavaScript -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"
  ></script>
             </head>
             <body>
                <header class="header">
                    <a href="">SUPPORT CENTRE DASHBOARD</a>
                    
                       
                    
                </header>
                <aside>
                    <ul>
                      
                        <li>
                            <a href="create ticket.php" class="btn btn-primary">create new ticket</a>
                        </li>
                        <li>
                            <a href="knowledgebase.php" class="btn btn-primary">Our articles</a>
                        </li>
                        
                    </ul>


                    
                </aside>
                <div class="content">
                <h1>Welcome to SEKU ICT HelpDesk & Support System.</h1>
                <p>Welcome to SEKU helpdesk centre. An ICT Technical support application for SEKU University. We normally respond within 24 hours. Inorder to support requests and better serve you, we utilize a helpdesk support ticket system. 
                    Every support request is assigned a unique ticket number which you can use to track the progress and the responses online. For your
                    responses, we provide complete archives and history of all your support requests. A valid email address is required to submit a ticket.
                <br> Incase of agent delay, we have both normal and automated chatbot to save on time. All your queries are handled.
            </p>
            <section class="Articles">
                <div class="container">
                    <h2>OUR ARTICLES</h2>
                    <div class="row">
         <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="images/hardware.jpg" class="img-responsive">
      </div>
      
      <h4><b>Common hardware articles</b></h4>
        <div>
                <a id="printer-issue"></a>
                <p><i>printer not printing</i>
            
                <!-- Button to toggle content -->
                <button onclick="togglePrinterContent()">Solutions</button>
                </p>
                <div id="printer-content" style="display: none; margin-left: 10px;">
                    <!-- Add content and solutions for printer issue -->
                    <p>If you are facing issues with your printer and unable to print, follow these steps to troubleshoot and resolve the problem:</p>
            
                    <ol>
                        <li>Check the printer connections: Ensure that the printer is properly connected to the computer and the power source.</li>
                        <li>Verify ink or toner levels: Make sure there is enough ink or toner in the printer cartridges.</li>
                        <li>Restart the printer: Sometimes, a simple restart can resolve printing issues. Turn off the printer, wait for a few seconds, and then turn it back on.</li>
                        <li>Update printer drivers: Ensure that you have the latest drivers for your printer installed on your computer.</li>
                        <li>Check for paper jams: Inspect the printer for any paper jams that might be causing the problem.</li>
                    </ol>
            
                    <p>If the issue persists after trying these steps, consider reaching out to the printer manufacturer's support or consult the user manual for further assistance.</p>
                </div>
            </div>
            
            <script>
                function togglePrinterContent() {
                    var printerContent = document.getElementById("printer-content");
                    printerContent.style.display = (printerContent.style.display === "none") ? "block" : "none";
                }
            </script>
            <div>
                <a id="keyboard-issue"></a>
                <p><i>keyboard is not typing</i>
            
                <!-- Button to toggle content -->
                <button onclick="toggleKeyboardContent()"> Solutions</button>
                </p>
                <div id="keyboard-content" style="display: none; margin-left: 10px;">
                    <!-- Add content and solutions for keyboard issue -->
                    <p>If your keyboard is not typing, follow these steps to troubleshoot and resolve the problem:</p>
            
                    <ol>
                        <li>Check the keyboard connections: Ensure that the keyboard is properly connected to the computer.</li>
                        <li>Restart your computer: A simple restart can sometimes fix issues with the keyboard.</li>
                        <li>Clean the keyboard: Dust and debris can affect keyboard functionality. Gently clean the keyboard to remove any obstructions.</li>
                        <li>Update keyboard drivers: Ensure that you have the latest drivers for your keyboard installed on your computer.</li>
                        <li>Test the keyboard on another device: If possible, test the keyboard on another computer to rule out hardware issues.</li>
                    </ol>
            
                    <p>If the issue persists after trying these steps, consider replacing the keyboard or seeking technical assistance.</p>
                </div>
            </div>
            <style>
                .form-button {
                    padding: 8px 12px;
                    background-color: #007bff; /* Button color */
                    color: #fff; /* Text color */
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
            
                .form-button:hover {
                    background-color: #0056b3; /* Button color on hover */
                }
            </style>
            <script>
                function toggleKeyboardContent() {
                    var keyboardContent = document.getElementById("keyboard-content");
                    keyboardContent.style.display = (keyboardContent.style.display === "none") ? "block" : "none";
                }
            </script>
            <div>
                <a id="computer-shutdown-issue"></a>
                <p><i>computer keeps shutting down</i>
            
                <!-- Button to toggle content -->
                <button onclick="toggleShutdownContent()">Solutions</button>
                </p>
                <div id="shutdown-content" style="display: none; margin-left: 10px;">
                    <!-- Add content and solutions for computer shutdown issue -->
                    <p>If your computer keeps on shutting down unexpectedly, follow these steps to troubleshoot and resolve the problem:</p>
            
                    <ol>
                        <li>Check for overheating: Ensure that your computer is not overheating. Clean dust from fans and ensure proper ventilation.</li>
                        <li>Update operating system: Make sure your operating system is up-to-date with the latest updates and patches.</li>
                        <li>Scan for malware: Run a thorough antivirus scan to check for malware or viruses that might be causing the shutdowns.</li>
                        <li>Check hardware components: Inspect hardware components such as RAM and power supply for potential issues.</li>
                        <li>Review recent changes: If the issue started after a recent software or hardware change, consider reverting those changes.</li>
                    </ol>
            
                    <p>If the problem persists, it may be necessary to consult with a professional technician or seek assistance from your computer's manufacturer.</p>
                </div>
            </div>
            <style>
                .form-button {
                    padding: 8px 12px;
                    background-color: #007bff; /* Button color */
                    color: #fff; /* Text color */
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
            
                .form-button:hover {
                    background-color: #0056b3; /* Button color on hover */
                }
            </style>
            
            <script>
                function toggleShutdownContent() {
                    var shutdownContent = document.getElementById("shutdown-content");
                    shutdownContent.style.display = (shutdownContent.style.display === "none") ? "block" : "none";
                }
            </script>
            
            
            
           
        
    
      
          </div>
          <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="images/software.png" class="img-responsive">
      </div>
      
      <h4><b>Common software articles</b></h4>
      <div>
        <a id="windows-update-issue"></a>
        <p><i>Unable to update Windows</i>
    
        <!-- Button to toggle content -->
        <button onclick="toggleWindowsUpdateContent()">solutions</button>
        </p>
        <div id="windows-update-content" style="display: none; margin-left: 10px;">
            <!-- Add content and solutions for Windows update issue -->
            <p>If you are experiencing issues updating Windows, follow these steps to troubleshoot and resolve the problem:</p>
    
            <ol>
                <li>Check internet connection: Ensure that your computer has a stable internet connection to download updates.</li>
                <li>Restart your computer: A simple restart can sometimes resolve issues with Windows update.</li>
                <li>Run Windows Update Troubleshooter: Use the built-in Windows Update Troubleshooter to identify and fix update-related problems.</li>
                <li>Check available disk space: Ensure that your computer has enough free disk space for the update process.</li>
                <li>Manually download updates: Visit the official Microsoft website to manually download and install the latest updates if automatic updates fail.</li>
            </ol>
    
            <p>If the issue persists, consider seeking assistance from Microsoft support or community forums for more specialized help.</p>
        </div>
    </div>
    <style>
        .form-button {
            padding: 8px 12px;
            background-color: #007bff; /* Button color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .form-button:hover {
            background-color: #0056b3; /* Button color on hover */
        }
    </style>
    
    <script>
        function toggleWindowsUpdateContent() {
            var windowsUpdateContent = document.getElementById("windows-update-content");
            windowsUpdateContent.style.display = (windowsUpdateContent.style.display === "none") ? "block" : "none";
        }
    </script>
    <div>
        <a id="computer-troubleshooting"></a>
        <p><i>troubleshooting a computer</i>
    
        <!-- Button to toggle content -->
        <button onclick="toggleComputerTroubleshootingContent()">solutions</button>
        </p>
        <div id="computer-troubleshooting-content" style="display: none; margin-left: 10px;">
            <!-- Add content and solutions for computer troubleshooting -->
            <p>If you are facing issues with your computer and find it challenging to troubleshoot, follow these general steps to identify and resolve the problem:</p>
    
            <ol>
                <li>Restart your computer: A simple restart can often resolve temporary issues.</li>
                <li>Check for software conflicts: Review recently installed software and uninstall any that might be causing conflicts.</li>
                <li>Run antivirus and malware scans: Perform thorough scans to ensure your computer is free from viruses and malware.</li>
                <li>Update operating system and drivers: Ensure your operating system and drivers are up-to-date with the latest updates.</li>
                <li>Review recent changes: Consider any recent changes to hardware or software that might be related to the issues.</li>
                <li>Seek online resources: Visit community forums or official support websites for your operating system or specific software for additional troubleshooting guidance.</li>
            </ol>
    
            <p>If the issue persists or if you need more specific assistance, it may be advisable to consult with a professional technician or reach out to the support channels for your computer's manufacturer.</p>
        </div>
        <div>
            <a id="antivirus-installation"></a>
            <p><i> Install and Run Antivirus</i>
        
            <!-- Button to toggle content -->
            <button onclick="toggleAntivirusInstallationContent()">solutions</button>
            </p>
            <div id="antivirus-installation-content" style="display: none; margin-left: 10px;">
                <!-- Add content for antivirus installation -->
                <p>Protect your computer by installing and running antivirus software. Follow these steps:</p>
        
                <ol>
                    <li>Choose Antivirus Software:</li>
                    <ul>
                        <li>Select reputable antivirus software such as Norton, McAfee, Avast, AVG, or Bitdefender.</li>
                    </ul>
        
                    <li>Visit the Official Website:</li>
                    <ul>
                        <li>Go to the official website of the chosen antivirus software.</li>
                    </ul>
        
                    <li>Download the Installer:</li>
                    <ul>
                        <li>Locate the download section on the website and download the antivirus installer.</li>
                    </ul>
        
                    <li>Run the Installer:</li>
                    <ul>
                        <li>Double-click on the downloaded file to run the installer.</li>
                    </ul>
        
                    <li>Follow Installation Wizard:</li>
                    <ul>
                        <li>Follow the on-screen instructions provided by the installation wizard.</li>
                        <li>Use default settings or customize if needed.</li>
                    </ul>
        
                    <li>Complete the Installation:</li>
                    <ul>
                        <li>Allow the antivirus software to install. This may take a few minutes.</li>
                    </ul>
                </ol>
        
                <p>Once installed, follow these steps to run the antivirus:</p>
        
                <ol>
                    <li>Launch Antivirus Program:</li>
                    <ul>
                        <li>Find the antivirus program on your computer, often located in the system tray or on the desktop.</li>
                    </ul>
        
                    <li>Update Virus Definitions:</li>
                    <ul>
                        <li>Ensure the antivirus software is up-to-date by updating virus definitions.</li>
                    </ul>
        
                    <li>Perform Full System Scan:</li>
                    <ul>
                        <li>Run a full system scan to check all files and areas for potential threats.</li>
                        <li>Follow recommendations to quarantine or remove any detected threats.</li>
                    </ul>
        
                    <li>Schedule Regular Scans:</li>
                    <ul>
                        <li>Configure the antivirus software to perform regular scheduled scans for ongoing protection.</li>
                    </ul>
                </ol>
            </div>
        </div>
        <style>
            .form-button {
                padding: 8px 12px;
                background-color: #007bff; /* Button color */
                color: #fff; /* Text color */
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        
            .form-button:hover {
                background-color: #0056b3; /* Button color on hover */
            }
        </style>
        
        <script>
            function toggleAntivirusInstallationContent() {
                var antivirusInstallationContent = document.getElementById("antivirus-installation-content");
                antivirusInstallationContent.style.display = (antivirusInstallationContent.style.display === "none") ? "block" : "none";
            }
        </script>
        
    </div>
    
    <script>
        function toggleComputerTroubleshootingContent() {
            var computerTroubleshootingContent = document.getElementById("computer-troubleshooting-content");
            computerTroubleshootingContent.style.display = (computerTroubleshootingContent.style.display === "none") ? "block" : "none";
        }
    </script>
    <div>
        <a id="microsoft-office-download"></a>
        <p><i> Downloading Microsoft Office</i>
    
        <!-- Button to toggle content -->
        <button onclick="toggleMicrosoftOfficeDownloadContent()">solutions</button>
        </p>
        
        <div id="microsoft-office-download-content" style="display: none; margin-left: 10px;">
            <!-- Add content for Microsoft Office download -->
            <p>Get Microsoft Office for your productivity needs. Follow these steps to download it:</p>
    
            <ol>
                <li>Visit the Official Microsoft Office Website:</li>
                <ul>
                    <li>Go to the official Microsoft Office website (usually www.office.com).</li>
                </ul>
    
                <li>Sign In or Create a Microsoft Account:</li>
                <ul>
                    <li>If you have a Microsoft account, sign in. If not, create a new account.</li>
                </ul>
    
                <li>Choose a Microsoft Office Plan:</li>
                <ul>
                    <li>Select the Office plan that suits your needs (e.g., Office 365, Microsoft 365).</li>
                </ul>
    
                <li>Select Install or Download:</li>
                <ul>
                    <li>Once you've chosen a plan, look for the "Install" or "Download" option.</li>
                </ul>
    
                <li>Follow the Installation Instructions:</li>
                <ul>
                    <li>Follow the on-screen instructions to complete the download and installation process.</li>
                    <li>Customize settings if needed, and wait for the installation to finish.</li>
                </ul>
            </ol>
    
            <p>After the installation, launch Microsoft Office and sign in with your Microsoft account to activate the software.</p>
        </div>
    </div>
    <style>
        .form-button {
            padding: 8px 12px;
            background-color: #007bff; /* Button color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .form-button:hover {
            background-color: #0056b3; /* Button color on hover */
        }
    </style>
    
    <script>
        function toggleMicrosoftOfficeDownloadContent() {
            var microsoftOfficeDownloadContent = document.getElementById("microsoft-office-download-content");
            microsoftOfficeDownloadContent.style.display = (microsoftOfficeDownloadContent.style.display === "none") ? "block" : "none";
        }
    </script>
    
    
    
          </div>
          <div class="col-md-3 profile text-center">
            <div class="img-box">
              <img src="images/network.jpg" class="img-responsive">
              

      </div>
     
      <h4><b>common network articles</b></h4>
      <div>
        <a id="ethernet-connection-issue"></a>
        <p><i>pc connection to ethernet</i>
    
        <!-- Button to toggle content -->
        <button onclick="toggleEthernetConnectionIssueContent()">solutions</button>
        </p>
        <div id="ethernet-connection-issue-content" style="display: none; margin-left: 10px;">
            <!-- Add content and solutions for Ethernet connection issue -->
            <p>If your computer is not connecting to Ethernet, follow these steps to troubleshoot and resolve the issue:</p>
    
            <ol>
                <li>**Check Physical Connections:**</li>
                <ul>
                    <li>Ensure the Ethernet cable is securely connected to both your computer and the router or modem.</li>
                    <li>Inspect the Ethernet cable for any signs of damage.</li>
                </ul>
    
                <li>**Restart Your Computer and Networking Devices:**</li>
                <ul>
                    <li>Restart your computer and, if possible, also restart your router or modem.</li>
                </ul>
    
                <li>**Verify Network Adapter Settings:**</li>
                <ul>
                    <li>Open the "Network and Sharing Center" on your computer and check if the Ethernet connection is enabled.</li>
                    <li>Ensure that the network adapter drivers are up-to-date. You can do this through the Device Manager.</li>
                </ul>
    
                <li>**Test with Another Device:**</li>
                <ul>
                    <li>If possible, test the Ethernet cable with another device to determine if the issue is with the cable or the computer.</li>
                </ul>
    
                <li>**Check Router or Modem Settings:**</li>
                <ul>
                    <li>Access your router or modem settings to ensure that the Ethernet port is active and properly configured.</li>
                    <li>Verify that the DHCP settings are correct and that your computer is obtaining an IP address automatically.</li>
                </ul>
    
                <li>**Try a Different Ethernet Port:**</li>
                <ul>
                    <li>If your router has multiple Ethernet ports, try connecting to a different port.</li>
                </ul>
    
                <li>**Update or Reinstall Network Drivers:**</li>
                <ul>
                    <li>If the network adapter drivers are outdated or corrupted, update them or reinstall them from the manufacturer's website.</li>
                </ul>
    
                <li>**Check for Software Conflicts:**</li>
                <ul>
                    <li>Ensure that no third-party firewall or security software is blocking the Ethernet connection.</li>
                </ul>
            </ol>
    
            <p>If the issue persists after trying these steps, it may be necessary to seek assistance from your IT department, internet service provider (ISP), or a professional technician.</p>
        </div>
    </div>
    <style>
        .form-button {
            padding: 8px 12px;
            background-color: #007bff; /* Button color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .form-button:hover {
            background-color: #0056b3; /* Button color on hover */
        }
    </style>
    
    <script>
        function toggleEthernetConnectionIssueContent() {
            var ethernetConnectionIssueContent = document.getElementById("ethernet-connection-issue-content");
            ethernetConnectionIssueContent.style.display = (ethernetConnectionIssueContent.style.display === "none") ? "block" : "none";
        }
    </script>
    <div>
        <a id="change-ip-address"></a>
        <p><i>Changing Computer IP Address</i>
    
        <!-- Button to toggle content -->
        <button onclick="toggleChangeIPAddressContent()">solutions</button>
        </p>
        
        <div id="change-ip-address-content" style="display: none; margin-left: 10px;">
            <!-- Add content and solutions for changing IP address -->
            <p>If you need to change the IP address of your computer, follow these steps:</p>
    
            <ol>
                <li>**Check Current IP Address:**</li>
                <ul>
                    <li>Open a Command Prompt (Windows) or Terminal (Mac/Linux).</li>
                    <li>Type the command `ipconfig` (Windows) or `ifconfig` (Mac/Linux) and press Enter.</li>
                    <li>Make note of your current IP address, subnet mask, and default gateway.</li>
                </ul>
    
                <li>**Access Network Settings:**</li>
                <ul>
                    <li>On Windows: Open the Control Panel, go to "Network and Sharing Center," and click on "Change adapter settings." Right-click on your network connection and select "Properties." Choose "Internet Protocol Version 4 (TCP/IPv4)" and click "Properties."</li>
                    <li>On Mac: Go to "System Preferences," select "Network," choose your connection (Wi-Fi or Ethernet), and click "Advanced." Navigate to the "TCP/IP" tab.</li>
                </ul>
    
                <li>**Change IP Address:**</li>
                <ul>
                    <li>Select the option to "Use the following IP address."</li>
                    <li>Enter a new IP address, subnet mask, and default gateway based on your network configuration.</li>
                </ul>
    
                <li>**DNS Configuration (Optional):**</li>
                <ul>
                    <li>If needed, you can also configure DNS settings. Choose "Use the following DNS server addresses" and enter the preferred and alternate DNS server addresses.</li>
                </ul>
    
                <li>**Save Changes:**</li>
                <ul>
                    <li>Click "OK" or "Save" to apply the changes.</li>
                </ul>
    
                <li>**Restart Network Connection:**</li>
                <ul>
                    <li>Disconnect and reconnect your network connection or restart your computer for the changes to take effect.</li>
                </ul>
    
                <li>**Verify New IP Address:**</li>
                <ul>
                    <li>Use the previously mentioned commands (`ipconfig` or `ifconfig`) to verify that your computer now has the new IP address.</li>
                </ul>
            </ol>
    
            <p>Keep in mind that changing the IP address may affect network connectivity, and you should ensure compatibility with your network configuration.</p>
        </div>
    </div>
    <style>
        .form-button {
            padding: 8px 12px;
            background-color: #007bff; /* Button color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .form-button:hover {
            background-color: #0056b3; /* Button color on hover */
        }
    </style>
    
    <script>
        function toggleChangeIPAddressContent() {
            var changeIPAddressContent = document.getElementById("change-ip-address-content");
            changeIPAddressContent.style.display = (changeIPAddressContent.style.display === "none") ? "block" : "none";
        }
    </script>
    <div>
        <a id="run-website-localhost"></a>
        <p><i> Running Website on Localhost</i>
    
        <!-- Button to toggle content -->
        <button onclick="toggleRunWebsiteLocalhostContent()">solutions</button>
        </p>
        
        <div id="run-website-localhost-content" style="display: none; margin-left: 10px;">
            <!-- Add content and solutions for running a website on localhost -->
            <p>If you want to run your website on localhost for development or testing, follow these steps:</p>
    
            <ol>
                <li>**Install a Local Server:**</li>
                <ul>
                    <li>Choose a local server environment such as XAMPP, WampServer, MAMP, or others, depending on your operating system.</li>
                    <li>Download and install the local server software.</li>
                </ul>
    
                <li>**Configure Local Server:**</li>
                <ul>
                    <li>Open the server control panel and start the Apache (web server) service.</li>
                    <li>Configure the server settings, such as the document root where your website files will be stored.</li>
                </ul>
    
                <li>**Place Website Files:**</li>
                <ul>
                    <li>Move or copy your website files into the designated document root folder. This is usually a directory like `htdocs` or `www` within the server installation directory.</li>
                </ul>
    
                <li>**Database Setup (if needed):**</li>
                <ul>
                    <li>If your website uses a database, create a local database and import your data for testing.</li>
                </ul>
    
                <li>**Access Your Website:**</li>
                <ul>
                    <li>Open your web browser and navigate to `http://localhost` or `http://127.0.0.1`. If you configured a specific port, include it in the URL (e.g., `http://localhost:8080`).</li>
                </ul>
    
                <li>**Test and Develop:**</li>
                <ul>
                    <li>Your website should now be accessible locally. Test and develop as needed, and changes will immediately reflect on the localhost environment.</li>
                </ul>
            </ol>
    
            <p>Remember to stop the local server when you're done with development or testing to free up system resources.</p>
        </div>
    </div>
    <style>
        .form-button {
            padding: 8px 12px;
            background-color: #007bff; /* Button color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .form-button:hover {
            background-color: #0056b3; /* Button color on hover */
        }
    </style>
    
    <script>
        function toggleRunWebsiteLocalhostContent() {
            var runWebsiteLocalhostContent = document.getElementById("run-website-localhost-content");
            runWebsiteLocalhostContent.style.display = (runWebsiteLocalhostContent.style.display === "none") ? "block" : "none";
        }
    </script>
    <div style="margin-bottom: 10px;">
        <a id="unstable-network"></a>
        <p><i>Network Connection</i> 
            <button class="form-button" onclick="toggleUnstableNetworkContent()">Solutions</button>
        </p>
    
        <!-- Content and solutions for unstable network -->
        <div id="unstable-network-content" style="display: none; margin-left: 10px;">
            <p>If your network connection is unstable, follow these steps to troubleshoot and improve stability:</p>
    
            <ol>
                <!-- List of solutions... -->
            </ol>
    
            <p>If the problem continues, you may need to consult with your ISP or a networking professional for further assistance.</p>
        </div>
    </div>
    
    <style>
        .form-button {
            padding: 8px 12px;
            background-color: #007bff; /* Button color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        .form-button:hover {
            background-color: #0056b3; /* Button color on hover */
        }
    </style>
    
    <script>
        function toggleUnstableNetworkContent() {
            var unstableNetworkContent = document.getElementById("unstable-network-content");
            unstableNetworkContent.style.display = (unstableNetworkContent.style.display === "none") ? "block" : "none";
        }
    </script>
    
   
    
    
    
    
          </div>
            </div>
          </section>
                </div>
                <div>
                    <script>
                        window.embeddedChatbotConfig = {
                        chatbotId: "lWqM3AkKYd11QqFHes_Yh",
                        domain: "www.chatbase.co"
                        }
                        </script>
                        <script
                        src="https://www.chatbase.co/embed.min.js"
                        chatbotId="lWqM3AkKYd11QqFHes_Yh"
                        domain="www.chatbase.co"
                        defer>
                        </script>

                </div>
                <footer class="footer">
                    <div class="container">
                        <style>
                            body {
                                display: flex;
                                flex-direction: column;
                                min-height: 100vh;
                            }
                    
                            .content {
                                flex: 1;
                                text-align: center;
                            }
                    
                            .footer {
                                background-color: #395f12;
                                padding: 10px 0;
                                text-align: center;
                            }
                        </style>
                    
                      <p>&copy; KIIKUU ICT HELPDESK. All rights reserved.</p>
                    </div>
                  </footer>
                </body>
              </html>
              

             </body>
             
             </html>
