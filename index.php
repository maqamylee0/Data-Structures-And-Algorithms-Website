
<?php require_once 'includes/header.php';?>

<h1 id="stack">Stack</h1>
          <li><a href="#def_stack"> What is a stack</a></li>
          <li> <a href="#stack_operations"> Stack operations </a></li>
          <li> <a href="#stack_primary_operations">Primary Operations</a> </li>
          <li><a href="#stack_applications">Stack Applications</a></li>
               
        </div>
        <div id="mainright">
          <h1 id="def_stack">What is a Stack</h1>
          <p>A stack is an ordered list in which all insertions and
            deletions are made at one end called the top.</p>
            <p>the operations are carried out in
              such a way that the last element which is inserted will be
              the first element out</p>
              <p>Such order is called Last In First Out or "LIFO"</p>
          <h2 id="stack_opertions">Stack Operations</h2>
          <p> Stack() - creates a new stack that is empty. It needs no
            parameters and returns an empty stack</p>
          <p>push(item) -adds a new item to the top of the stack. It
              needs the item and returns nothing</p>
           <p> pop() - removes the top item from the stack. It needs no
                parameters and returns the item. The stack is modified</p>
          <p> peek() - returns the top item from the stack but does not
                  remove it. It needs no parameters. The stack is not
                  modified.</p>
          <p>is_empty() - tests to see whether the stack is empty. It
                    needs no parameters and returns a Boolean value.</p>
          <p>size() - returns the number of items on the stack. It needs
                      no parameters and returns an integer</p>
          <h2 id="stack_primary_operations">Stack Primary Applications.</h2>
          <ul>
            <li>Push <li>Add an element to the top of the stack</li> </li>
            <li>Pop <li>Remove the element at the top of the stack</li></li>
          </ul>
          <h2 id="stack_applications">Stack Applications</h2>
          <li>Pile of books</li>
          <li> Plate trays</li>
          <li>Program execution stack</li>
          <li>Evaluating expressions</li>
          <li>Functional calls/recursion</li>
          <li>Undo in an editor</li>
          <li>Balanced parenthesis</li>
        </div>
      </div>
      <?php require_once 'includes/footer.php';?>

<?php require_once 'includes/header.php';?>

      <h1 id="queues">Queues</h1>
          <li><a href="#queue_def"> What is a Queue</a></li>
          <li> <a href="#queue_operations">Operations on a queue</a></li>
          <li><a href="#queue_applications">Apllications of queues</a></li> 
         
               
        </div>
        <div id="mainright">
          <h1 id="queue_def">What is a Queue</h1>
          <p>It is an ordered group of homogeneous items of elements.</p>
          <p>Queues have two ends:
            <ul>
              <li>Elements are added at one end called the rear .</li>
              <li>Elements are removed from the other end called the front.</li>
            </ul>
          </p>
          <p>The element added first is also removed first (FIFO: First
            In, First Out).</p>
            <p>A queue is structured as an ordered collection of items which are added at one end, called the “rear,” and removed from the
              other end, called the “front.”</p>
          <h2 id="queue_operations">Operations on a queue.</h2>
          <p>Queue() creates a new queue that is empty. It needs
            no parameters and returns an empty queue.</p>
            <p>enqueue(item) adds a new item to the rear of the queue. It needs the item and returns nothing.</p>
            <p> dequeue() removes the front item from the queue.It needs no parameters and returns the item. The
              queue is modified.</p>
              <p>is_empty() tests to see whether the queue is empty.
                It needs no parameters and returns a Boolean value.</p>
                <p> size() returns the number of items in the queue. It
                  needs no parameters and returns an integer</p>
          <h3 id="queue_applications">Applications of a queue</h3>
         <li>queue of print jobs to send to the printer</li>
         <li>queue of programs / processes to be run</li>
         <li>queue of network data packets to send</li>
         <li>modeling a line of customers or clients</li>
         <li> cars at a gas station (or on an assembly line)</li>
         <li> people on an escalator or waiting in a line</li>
         <li>Message queue in Windows</li>
         <li>I/O buffer</li>
        </div>
      </div>
      <?php require_once 'includes/footer.php';?>


      <?php require_once 'includes/header.php';?>

      <h1 id="lists">List</h1>
          <li><a href="#lists">What is List</a></li>
          <li> <a href="#linked_list_def">What is a Linked List</a></li>
          <li> <a href="#linked_list_ordered">Ordered Linked List </a> </li>
          <li><a href="#linked_list_unordered">Unordered Linked list</a></li>
          
               
        </div>
        <div id="mainright">
          <h1 id="list">What is a List</h1>
          <p>A list is a collection of items where each item holds
            a relative position with respect to the others.</p>
            <p>Lists can be divided into ordered and unordered list</p>
          <h2 id="linked_list_ordered">Orderded Linked List</h2>
          <p>The structure of an ordered list is a collection of
            items where each item holds a relative position that
            is based upon some underlying characteristic of the
            item.</p>
            <p>The ordering is typically either ascending or
              descending and we assume that list items have a
              meaningful comparison operation that is already
              defined.</p>
              <p>Many of the ordered list operations are the same as
                those of the unordered list. Except this operation
              <li>OrderedList() creates a new ordered list that is empty.
                It needs no parameters and returns an empty list.</li></p>
                
          <h3 id="linked_list_unordered">Unordered List</h3>
          <h5>The structure of an unordered list, as described above, is a
            collection of items where each item holds a relative position with
            respect to the others.</h5>
          <p>List() creates a new list that is empty. It needs no parameters and
            returns an empty list.</p>
            <p>add(item) adds a new item to the list. It needs the item and
              returns nothing. Assume the item is not already in the list.</p>
              <p>remove(item) removes the item from the list. It needs the item
                and modifies the list. Assume the item is present in the list.
                search(item) searches for the item in the list. It needs the item
                and returns a Boolean value.</p>
                <p>is_empty() tests to see whether the list is empty. It needs no
                  parameters and returns a Boolean value.</p>
                  <p> size() returns the number of items in the list. It needs no
                    parameters and returns an integer</p>
                    <p>append(item) adds a new item to the end of the list making it
                      the last item in the collection. It needs the item and returns
                      nothing. Assume the item is not already in the list</p>
                      <p>index(item) returns the position of item in the list. It needs the
                        item and returns the index. Assume the item is in the list.</p>
                        <p>insert(pos,item) adds a new item to the list at position pos. It
                          needs the item and returns nothing. Assume the item is not
                          already in the list and there are enough existing items to have
                          position pos.</p>
                          <p>pop() removes and returns the last item in the list. It needs
                            nothing and returns an item. Assume the list has at least one
                            item</p>
                            <p>pop(pos) removes and returns the item at position pos. It needs
                              the position and returns the item. Assume the item is in the
                              list.</p>
                              <p> In order to implement an unordered and ordered list , we will
                                construct what is commonly known as a linked list.</p>
         <h2 id="linked_list_def">Linked List</h2>
         <p> It consists of data items called nodes. Each data
          element contains two field; information field and a link field
          connected to another data items.</p>
        <p> Linked list is divided into three:
          <li> <a href="#singly_linked_list"> Singly linked list</a></li>
          <li><a href="#doubly_linked_list">Doubly linked list</a></li>
          <li><a href="#circular_linked_list"></a>Circularly linked list</li>
        </p>
           <h3 id="singly_linked_list"></h3>  
           <p>A singly linked list is a
            concrete data structure
            consisting of a sequence
            of nodes</p>    
            <p>Each node stores
              <li>element</li>
              <li>link to the next node</li>
            </p>     
            <h3 id="doubly_linked_list"></h3>  
           <p>A doubly linked list is often
            more convenient!</p>    
            <p>Each node stores
              <li>element</li>
              <li>link to the previous node</li>
              <li>link to the next node</li>
            </p>     
        </div>
      </div>
      <?php require_once 'includes/footer.php';?>


      <?php require_once 'includes/header.php';?>

      <h1 id="sorting">Sorting</h1>
            <li> <a href="#sorting_def">What is a sorting</a></li>
            <li> <a href="#selection_sort">Selection Sort</a> </li>
            <li> <a href="#insertion_sort">Insertion Sort</a></li> 
            <li><a href="#bubble_sort">Bubble Sort</a></li>
            <li><a href="#quick_sort">Quick Sort</a></li>
                 
          </div>
          <div id="mainright">
            <h1 id="sorting_def">What is Sorting</h1>
            <p>Sorting is a process that organizes or rearranges a collection of
              data into either ascending or descending order.</p>
              <p>The list should be homogeneous, that is the elements in the list
                should be the same type.</p>
                <p>Some of the sorting algorithms that we will be talking about,
                  that we will be analyzing about are <span>Bubble sort</span> , <span>Selection sort</span>
                  ,<span>Insertion sort</span> ,<span> Merge Sort</span>, <span>Quick sort</span> etc.</p>
                  <p>We often classify sorting algorithms based on some
                    parameters as follows: </p>
                    <ul>
                      <li>Time Complexity: <p> which is the measure of rate of
                        growth of time taken by an algorithm with respect to
                        input size. Some algorithms will be relatively faster than
                        the others.</p></li>
                        <li>Space Complexity or memory usage <p>some sorting
                          algorithms are in place, they use constant amount of
                          extra memory to rearrange the elements in the list, while
                          some sorting algorithms like merge sort, use extra
                          memory to temporarily store data and the memory usage
                          grows with input size</p></li>
                          <li>Stability <p>sorting algorithm is said to be stable if two
                            objects with equal keys appear in the same order in
                            sorted output as they appear in the input array to be
                            sorted.</p></li>
                            <li>Internal sort or External sort <p>when all the records that need to be sorted are in the
                              memory or RAM, such sort is internal sort</p>
                            <p>If the records are on auxiliary storage like disk and
                              tapes, quite often it is not possible to get all of them
                              in the main memory in one go, then we call such a sort
                              external sort.</p></li>
                              <li>Recursive or non-recursive <p>Some sorting algorithms like quick sort and merge
                                sort are recursive while other like insertion sort and
                                selection sort are non-recursive</p></li>
                    </ul>
            <h2 id="selection_sort">Selection Sort</h2>
            <p>The list is divided into two sublists, sorted and
              unsorted, which are divided by an imaginary wall.</p>
              <p>We find the smallest element from the unsorted
                sublist and swap it with the element at the
                beginning of the unsorted data.</p>
                <p> After each selection and swapping, the imaginary
                  wall between the two sublists move one element
                  ahead, increasing the number of sorted elements
                  and decreasing the number of unsorted ones.</p>
                  <p>Each time we move one element from the unsorted
                    sublist to the sorted sublist, we say that we have
                    completed a sort pass.</p>
                    <p>A list of n elements requires n-1 passes to
                      completely rearrange the data.</p>
                      <p>In general, we compare keys and move items (or
                        exchange items) in a sorting algorithm (which uses key
                        comparisons).</p>
                        <p> So, to analyze a sorting algorithm we should count
                          the number of key comparisons and the number of
                          moves.</p>
                          <p>In selectionSort function, the outer for loop executes
                            n-1 times.</p>
                            <p>We invoke swap function once at each iteration.
                              <li>Total Swaps: n-1</li>
                              <li>Total Moves: 3*(n-1)(Each swap has three moves)</li>
                            </p>
                            <p>The inner for loop executes the size of the unsorted
                              part minus 1 (from 1 to n-1), and in each iteration we
                              make one key comparison.</p>
                              <p>of key comparisons = 1+2+...+n-1 = n*(n-1)/2
                                <li>So, Selection sort is O(n2)</li>
                                <li>The best case, the worst case, and the average case of
                                  the selection sort algorithm are same.  all of them
                                  are O(n2)</li>
                                  <li>This means that the behavior of the selection sort algorithm
                                    does not depend on the initial organization of data.</li>
                                    <li>Since O(n2) grows so rapidly, the selection sort algorithm is
                                      appropriate only for small n.</li>
                                      <li>A selection sort could be a good choice if data moves are costly
                                        but key comparisons are not costly (short keys, long records)</li>
                              </p>
            <h2 id="insertion_sort">Insertion Sort.</h2>
            <p>Insertion sort is slower than quick sort,
              but not as slow as bubble sort, and it is
              easy to understand.</p>
              <p>Insertion sort works the same way as
                arranging your hand when playing cards.</p>
                <p>Insertion sort is a simple sorting
                  algorithm that is appropriate for
                  small inputs.</p>
                  <p>The list is divided into two parts:
                    sorted and unsorted.
                  <li>In each pass, the first element of the
                    unsorted part is picked up,
                    transferred to the sorted sublist,
                    and inserted at the appropriate p</li></p>
                    <p>A list of n elements will take at most
                      n-1 passes to sort the data.</p>
                      <li>Running time depends on not only the size of the array
                        but also the contents of the array.</li>
                        <li>Best case <span>O(n)</span></li>
                        <li>Worst case <span>O(n2)</span></li>
                        <li>Average case <span>O(n2)</span></li>
        <h2 id="bubble_sort">Bubble Sort.</h2>
            <p>The bubble sort makes multiple
              passes through a list.</p>
              <p>It compares adjacent items and
                exchanges those that are out of
                order.</p>
                <p>Each pass through the list places the
                  next largest value in its proper place.</p>
                  
                        <li>Best case <span>O(n)</span></li>
                        <li>Worst case <span>O(n2)</span></li>
                        <li>Average case <span>O(n2)</span></li>

       <h2 id="merge_sort">Bubble Sort.</h2>
                        <p>Mergesort algorithm is one of two
important divide-and-conquer sorting
algorithms (the other one is
quicksort)</p>
                          <p>It is a recursive algorithm.
                            <li>Divides the list into halves</li>
                            <li>Sort each halve separately, and</li>
                            <li>Then merge the sorted halves into
                              one sorted array</li>
                          </p>
                          <p>But, mergesort requires an extra array
                            whose size equals to the size of the
                            original array</p>
                            <p>Mergesort is extremely efficient algorithm
                              with respect to time..</p>
                              
                                    <li>Worst case <span> O (n * log2n )</span></li>
                                    <li>Average case <span> O (n * log2n )</span></li>
                                    <h2 id="quick_sort">Quick Sort.</h2>
                                    <p>QuickSort is a Divide and Conquer
                                      algorithm.</p>
                                      <p>It picks an element as pivot and partitions
                                        the given array around the picked pivot.There are many different versions of
                                        quickSort that pick pivot in different ways.
                                        <li>Always pick first element as pivot.</li>
                                        <li>Always pick last element as pivot</li>
                                        <li>Pick a random element as pivot. </li>
                                        <li>Pick median as pivot</li>
                                      </p>
                                      <p>Although the worst case behavior is not so good, its average
                                        case behavior is much better than its worst case</p>
                                        <p>The quick-sort algorithm consists of the following three steps:
                                          <li>Divide: Partition the list. <p>To partition the list, we first choose some element
                                            from the list for which we hope about half the
                                            elements will come before and half after. Call this
                                            element the pivot.</p></li>
                                            <li>Recursion: <p>Recursively sort the sublists separately.</p></li>
                                            <li>Conquer: <p>Put the sorted sublists together by a simple
                                              concatenation.</p></li>
                                        </p>
                                          <li>worst case <span> O(n2)</span></li>
                                                <li>Best case <span> O  O(n*log2n) </span></li>
                                                <li>Average case <span>  O(n*log2n) </span></li>

          </div>
        </div>
        <?php require_once 'includes/footer.php';?>



        <?php require_once 'includes/header.php';?>

        <h1 id="searching">Searching</h1>
              <li> <a href="#unordered_search">Unordered search</a></li>
              <li> <a href="#ordered_search">Ordered Search</a> </li>
              <li> <a href="#binary_search">Binary Search</a></li> 
              <li> Measuring an input size</li>
                   
            </div>
            <div id="mainright">
              <h1 id="searching_def">What is searching</h1>
              <p>The process used to find the location of a
                target among a list of objects</p>
              <p>A question you should always ask when selecting a
                search algorithm is “How fast does the search have to
                be?” The reason is that, in general, the faster the
                algorithm is, the more complex it is.</p>
                <p>Let’s explore the following search algorithms, keeping
                  speed in mind.
                <li>Sequential (linear) search</li>
              <li>Binary search</li
                ></p>
              <h2 id="unordered_search">Unordered Linear Search</h2>
              <p>Search an unordered array of integers for a value and return its index if the
                value is found. Otherwise, return -1.</p>
              <h2 id="ordered_search">Ordered Linear Search</h2>
              <p>Search an ordered array of integers for a value and return its index if
                the value is found; Otherwise, return -1.</p>
                <p> Linear search can stop immediately when it has passed the possible
                  position of the search value.</p>
                  <h4>How long it takes</h4>
                  <li>Best case <span>O(1)</span></li>
                  <li>Worst case <span>O(n)</span> </li>
                  <li>Average case <span>O(n)</span> </li>
                  <h2 id="binary_search">Binary Search</h2>
                  <p>Binary search is based on the “divide-and-conquer”
                    strategy which works as follows:
                 <li>Start by looking at the middle element of the array</li> 
                <li>.If the value it holds is lower than the search element,
                  eliminate the first half of the array from further
                  consideration.</li>
                <li>.If the value it holds is higher than the search
                  element, eliminate the second half of the array from
                  further consideration.</li>
                <li>Repeat this process until the element is found, or until
                  the entire array has been eliminated.</li></p>
                  <p>Search an ordered array of integers for a value and return
                    its index if the value is found. Otherwise, return -1.</p>
                    <p>Binary search skips over parts of the array if the search
                      value cannot possibly be there.</p>
                      <p>Binary search only works if the array is already sorted</p>
                      <h4>How fast is it</h4>
                      So, the time complexity of binary search is O(log2n) which is exactly
the same as O(log n) .

            </div>
          </div>
          <?php require_once 'includes/footer.php';?>
