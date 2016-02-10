numInput = '''10
1
3
5
4
0
0
7
0
0
6'''

numList = numInput.split("\n")
sumList = []

for index, item in enumerate(numList):
    if item !="0" and index != 0:
        sumList.append(item)
    elif index != 0:
        sumList.pop()
sum = 0
for item in sumList:
    sum += int(item)

print(sum)
