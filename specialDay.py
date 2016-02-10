month = 2
day = 18

monthGiven = int(raw_input())

dayGiven = int(raw_input())

date = [monthGiven,dayGiven]

if date[0] < month or date[0] == month and date[1] < day:
    print("Before")
elif date[0] > month or date[0] == month and date[1] > day:
    print("After")
elif date[0] == month and date[1] == day:
    print("Special")
