import os

checkWebRoot = input('is WEB_ROOT = "/" ?(y/n)> ')

if checkWebRoot == 'y':
    print('OK to go!')
else:
    exit()

os.system('git status')
os.system('git add .')
commitMessage = input('commit message> ')
commitCommand = 'git commit -m ' + '"' + commitMessage + '"'
os.system(commitCommand)
os.system('git push')

checkHerokuPush = input('Push to Heroku?(y/n)> ')

if checkHerokuPush == 'y':
    print('Here we go!')
else:
    print('Maybe next time!')
    exit()

os.system('git push heroku main')