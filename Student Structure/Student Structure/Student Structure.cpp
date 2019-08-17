// Student Structure.cpp

#include "pch.h"
#include <iostream>
#include <iomanip>
#include<string>
#include<fstream>
#include<iomanip>

using namespace std;

struct studentType
{
	string studentLName;
	string studentFName;
	int testScore;
	char letter_grade;
}students[20];
void loadStudents(studentType students[], int &n);
void getGrade(studentType students[], int n);
int highTestScore(studentType students[], int n);
void sudentsWithHighestGrades(studentType students[], int n);
void allStudents(studentType students[], int n);
void saveToFileNewFile(studentType students[], int n);

int main()
{
	int choice;
	studentType students[20];
	int n;

	do
	{
		cout << "***************Student's Grade Index***************" << endl;
		cout << "1. Transfer Students and Grades From File \n2. Index For Students With Highest Score\n3.Index For Students, Test Scores, and Letter Grade\n4. Save Students To New File\n5. Exit\n";
		cout << "Enter your choice: ";
		cin >> choice;
		switch (choice)
		{
		case 1:
			loadStudents(students, n);
			break;
		case 2:
			if (n <= 0)
			{
				cout << "File is not loaded.." << endl;
			}
			else
				sudentsWithHighestGrades(students, n);
			break;
		case 3:
			if (n <= 0)
			{
				cout << "File is not loaded.." << endl;
			}
			else
				allStudents(students, n);
			break;
		case 4:
			saveToFileNewFile(students, n);
			break;
		case 5:
			cout << "Exiting...." << endl;
			return 0;
		}
	} while (choice != 5);
}

void loadStudents(studentType students[], int &n)
{
	ifstream in;
	string fname;
	string fName;
	string lName;
	string str;
	n = 0;

	cout << "Enter the input file name: ";
	cin >> fname;
	cout << fname;
	in.open(fname);

	if (!in)
	{
		cout << "Not able to open input file " << fname << endl;
		return;
	}
	in >> fName;
	students[n].studentFName = fName;
	while (!in.eof())
	{

		in >> lName;
		students[n].studentLName = lName;
		in >> str;
		students[n].testScore = stoi(str);
		++n;
		in >> fName;
		students[n].studentFName = fName;
	}

	getGrade(students, n);
}
void getGrade(studentType students[], int n)
{
	for (int i = 0; i < n; i++)
	{
		if (students[i].testScore >= 90 && students[i].testScore <= 100)
		{
			students[i].letter_grade = 'A';
		}
		else if (students[i].testScore >= 80 && students[i].testScore < 90)
		{
			students[i].letter_grade = 'B';
		}
		else if (students[i].testScore >= 70 && students[i].testScore < 80)
		{
			students[i].letter_grade = 'C';
		}
		else if (students[i].testScore >= 60 && students[i].testScore < 70)
		{
			students[i].letter_grade = 'D';
		}
		else
		{
			students[i].letter_grade = 'F';
		}
	}
}

int highTestScore(studentType students[], int n)
{
	int max_score = students[0].testScore;
	for (int i = 0; i < n; i++)
	{
		if (max_score < students[i].testScore)
		{
			max_score = students[i].testScore;
		}
	}
	return max_score;
}
void sudentsWithHighestGrades(studentType students[], int n)
{
	int max_score = highTestScore(students, n);

	cout << "Students with highest score " << max_score << endl;

	for (int i = 0; i < n; i++)
	{
		if (students[i].testScore == max_score)
		{
			cout << setw(10) << left << students[i].studentLName << ", " << setw(10) << left << students[i].studentFName << " " << setw(5) << right << students[i].testScore << " " << setw(1) << right << students[i].letter_grade << endl;
		}
	}
}
void allStudents(studentType students[], int n)
{

	for (int i = 0; i < n; i++)
	{
		cout << setw(10) << left << students[i].studentLName << ", " << setw(10) << left << students[i].studentFName << " " << setw(5) << right << students[i].testScore << " " << setw(1) << right << students[i].letter_grade << endl;
	}
}
void saveToFileNewFile(studentType students[], int n)
{
	ofstream out;
	string fname;


	cout << "Enter the name of the file to save the student data" << endl;
	cin >> fname;

	out.open(fname);

	if (!out)
	{
		cout << "Not able to open file " << fname << endl;
		return;
	}
	for (int i = 0; i < n; i++)
	{
		out << left << students[i].studentLName << ", " << left << students[i].studentFName << " " << students[i].testScore << " " << students[i].letter_grade << endl;
	}
}