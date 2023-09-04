# PHP IP STEALER

**Disclaimer: This script is for educational purposes only. It should not be used for malicious activities.**

This PHP script allows you to log website visits by sending data to a Discord webhook. It captures information such as the user agent, IP address, and timestamp of the visit, and sends it to a specified Discord channel for monitoring and analysis.

## Usage

To use this script, follow these steps:

1. **Set up a Discord webhook:**
   - Create a new text channel on your Discord server or use an existing one where you want to receive the log messages.
   - Go to the channel settings, then `Integrations` > `Webhooks`, and click on `Create Webhook`. Copy the generated webhook URL.

2. **Insert the Webhook URL:**
   - Replace `'discord_webhook_here'` with the actual webhook URL you copied in the `$webhookUrl` variable in the script.

3. **Upload the Script:**
   - Save the script to your web server's directory where you want to track website visits.

4. **Configure your Web Server:**
   - Make sure your web server is configured to run PHP scripts (e.g., Apache with PHP enabled).

5. **Access the Script:**
   - Access the script from a web browser. For example, if the script is hosted at `https://yourdomain.com/webhook_logger.php`, simply navigate to that URL.

6. **View Logs on Discord:**
   - Go to your Discord channel where you set up the webhook. You will start receiving log messages containing the user agent, IP address, and timestamp of each website visit.

## Example Discord Log Message

Each log message sent to Discord will contain the following information:

- **Title:** Website Visit
- **Color:** White (0xFFFFFF)
- **Description:**
  - User Agent: `[User Agent]`
  - IP Address: `[IP Address]`
  - Time: `[Timestamp]`

## Error Handling

In case there's an error while sending data to Discord, the script will log the error in the web server's error log.

Please make sure to secure your server and only grant access to this script to trusted users, as it can potentially expose sensitive information about website visitors. Additionally, consider using this script for legitimate monitoring and analytics purposes.
