## codelabs activity


greetings = "Welcome to the Yes or No Issue Polling App"

print(greetings)
issue = str(input("What is the yes or no issue you will be voting on today: "))
voters = int(input("What is the number of voters you will allow on the issue: "))
passWord = input("Enter a password forr the polling results: ")

for i in range(voters):
    print("\nVoter " + str(i+1))
    
    name = input("Enter your full name: ")
    print("Here is our issue: " + issue)
    vote = input("What do you think... yes or no: ")
    print("Thankyou " + name +  "! Your vote of " + vote + " has been recorded.")
user_0 = {
    name:vote
}    

users = [user_0]
    
print("\nThe following " + str(voters) + " people voted:" )
for user in users:
    for key, value in user.items():
        print(key)



#possible use for this activtiy
def favorite_food_name():
    mydict = dict()
    while True:
        name = input("name:")
        name = name.strip()
        if name == '':
            break
        food = input("food:")
        food = food.strip()
        mydict[name] = food
    # print(mydict)
    return mydict


if __name__ == '__main__':
    mydict = favorite_food_name()
    print(mydict)
