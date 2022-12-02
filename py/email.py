from email.message import EmailMessage
import ssl
import smtplib


email_sender = 'liam.ryden@elev.ga.lbs.se'
email_password = 'ujekmukwekuyebfr'
email_reciever = 'liam.ryden@elev.ga.lbs.se'

subject = 'Ny beställning'
body = """
He ordered this
"""

em = EmailMessage()
em['from'] = email_sender
em['to'] = email_reciever
em['subject'] = subject
em.set_content[body]

context = ssl.create_default_context()

with smtplib.SMTP_SSL('smtp.gmail.com', 465, context=context) as smtp:
    smtp.login(email_sender, email_password)
    smtp.sendmail(email_sender,email_reciever, em.as_string())
